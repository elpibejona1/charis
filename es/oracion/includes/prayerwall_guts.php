<?php /* Prayer Engine - Guts of the Main Prayer Wall - EDIT PHP AT YOUR OWN RISK! */
	require_once 'config/subdirectories.php';
	require_once 'gdphp/config/engineconfig.php';
	
	// Re-route to mobile site
	if (MOBILESITE == "yes") {
		if (!isset($_COOKIE['nomobile']) && !isset($_GET['display'])) { // Only redirect if cookie or full site call not present
			if (preg_match('/(iPhone)/', $_SERVER['HTTP_USER_AGENT']) || preg_match('/(iPod)/', $_SERVER['HTTP_USER_AGENT']) || preg_match('/(Android)/', $_SERVER['HTTP_USER_AGENT'])) {
				$url = BASE_URL . 'mobile';
				header("Location: $url");
				exit();
			};
		}
		if (isset($_GET['display'])) { // Create cookie for future visits if full site call present
			$c = "true";
			setcookie("nomobile", $c, time()+60*60*24*180);
		}
	}

	require_once DATABASE;
	require_once 'includes/markdown.php';
	
	if ($_POST) { /* IF FORM SUBMITTED */
		$errors = array(); //Set up errors array
		
		if ( NOSPAM == 1 ) { // Optional reCAPTCHA spam protection
			if(isset($_POST['g-recaptcha-response'])){
		      $enmpe_captcha = $_POST['g-recaptcha-response'];
		    }

		    function peurl_get_contents ($url) {
			    if (!function_exists('curl_init')){ 
			        $enmpe_errors[] = 'There is a server configuration error that will not allow spam filtering. Please let the web developer know.';
			    }
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_URL, $url);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			    $output = curl_exec($ch);
			    curl_close($ch);
			    return $output;
			}

			$enmpe_secretKey = "6Le4MycTAAAAAGLrf7C-gWAQGlMNSvVPXzsr8lll";
		    $enmpe_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($enmpe_secretKey) .  '&response=' . urlencode($enmpe_captcha);
		   	if (!ini_get('allow_url_fopen')){
		   		$response = peurl_get_contents($enmpe_url);
		   	} else {
		   		$response = file_get_contents($enmpe_url);
		   	}
		    $responseKeys = json_decode($response,true);

		    // should return JSON with success as true
		    if($responseKeys["success"]) {
		    } else {
		           $errors[] = 'Por favor, conpruebe que no es un robot de spam.';
		    }
		}
		
		//Get all info from the form and validate some of it
		$name = strip_tags($_POST['name']);
		
		if (empty($_POST['email'])) { //validate presence and format of email
			$errors[] = 'An email address is required to submit a prayer request.';
		} else {
			if (preg_match('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$^', $_POST['email'])) { 
				$email = $_POST['email'];
			} else {
				$errors[] = 'You must provide a valid email address.';
			};
		};
		
		$phone = strip_tags($_POST['phone']);
		$shareoption = strip_tags($_POST['desired_share_option']);
		
		if (empty($_POST['prayer'])) { //validate presence and length of prayer
			$errors[] = 'Please enter a prayer request.';
		} else {
			if (preg_match('/(href=)/', $_POST['prayer']) || preg_match('/(HREF=)/', $_POST['prayer'])) { // Simple check for spam hyperlinks
				$errors[] = 'Sorry, no HTML is allowed in your prayer request.';
			} else {
				$prayer = strip_tags($_POST['prayer']);
			}
		};
		
		if (isset($_POST['notifyme'])) { //email notification
			$notifyme = $_POST['notifyme'];
		} else {
			$notifyme = 0;
		}
		
		if (isset($_POST['twitter_ok'])) { //add to twitter prayer feed
			$twitterok = $_POST['twitter_ok'];
		} else {
			$twitterok = 0;
		}
		
		if (isset($_POST['twitter_ok'])) { //validate prayer tweet
			if (!empty($_POST['prayer_tweet'])) { 
				if (preg_match('/(href=)/', $_POST['prayer_tweet']) || preg_match('/(HREF=)/', $_POST['prayer_tweet'])) { // Simple check for spam hyperlinks
					$errors[] = 'Sorry, no HTML is allowed in your prayer tweet.';
				} else {
					$prayertweet = strip_tags(substr($_POST['prayer_tweet'],0,140));
				}
			} else {
				$errors[] = 'Please enter a prayer tweet.';
			};
		} else {
			$prayertweet = NULL;
		}
		
		$datereceived = $_POST['date_received'];
		$prayercount = $_POST['prayer_count'];
		$brandnew = $_POST['brand_new'];
		$postthis = $_POST['post_this'];
		$dc = md5(uniqid(rand(), true));
		
		if (empty($errors)) { /* IF THERE AREN'T ANY ERRORS, WRITE IT TO THE DB */
			if (MODERATION == 0) {
				//Submit Prayer Request
				$sql = "INSERT INTO prayers(name, email, phone, desired_share_option, share_option, prayer, posted_prayer, date_received, prayer_count, brand_new, post_this, notifyme, twitter_ok, prayer_tweet, delete_code, moderated_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$createprayer = $dbh->prepare($sql);
				$createprayer->execute(array($name, $email, $phone, $shareoption, $shareoption, $prayer, $prayer, $datereceived, $prayercount, $brandnew, "1", $notifyme, $twitterok, $prayertweet, $dc, "Not Moderated"));
			} else {
				//Submit Prayer Request
				$sql = "INSERT INTO prayers(name, email, phone, desired_share_option, prayer, date_received, prayer_count, brand_new, post_this, notifyme, twitter_ok, prayer_tweet, delete_code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$createprayer = $dbh->prepare($sql);
				$createprayer->execute(array($name, $email, $phone, $shareoption, $prayer, $datereceived, $prayercount, $brandnew, $postthis, $notifyme, $twitterok, $prayertweet, $dc));
			}
			
			// Send 'Request Received' email with delete link
			include 'includes/prayer_received_email.php';
			//Send emails to specific admins if enabled
			include 'includes/email_notification.php';
			//Show paginated prayer requests
			include 'includes/paginated_prayer_requests.php';
		} else { /* IF THERE ARE ERRORS, ALERT TO WHAT'S MISSING */
			//Show paginated prayer requests	
			include 'includes/paginated_prayer_requests.php';
		};
	} else { /* IF JUST VIEWING THE PAGE */
		//Show paginated prayer requests
		include 'includes/paginated_prayer_requests.php';
	}
/* ---------- END PRAYER ENGINE PHP GUTS ---------- */
?>