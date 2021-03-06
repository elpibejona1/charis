<?php 
	require_once 'includes/prayerwall_guts.php'; // The guts of the Prayer Wall are in this file.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require("../../_includes/directory.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<link rel="shortcut icon" href="../../favicon.ico?v2" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS Prayer Feed" href="<?php echo BASE_URL ?>feeds/prayers.php" /><!-- LINK TO PRAYER ENGINE RSS FEED -->
	<title>Mur de Prière Charis - L'Aliance Charis</title>
<!-- FILES NEEDED FOR PRAYER ENGINE - EDIT AT YOUR OWN RISK! -->
	<script language="javascript" src="javascripts/prayerengine/jquery.js" type="text/javascript"></script> 
	<script language="javascript" src="javascripts/prayerengine/jquery.validate.js" type="text/javascript"></script>
	<script language="javascript" src="javascripts/prayerengine/update_prayers.js" type="text/javascript"></script> 
	<script language="javascript" src="javascripts/prayerengine/webactions.js" type="text/javascript"></script>
	<!-- MY SCRIPTS -->
	<script src="https://use.fontawesome.com/6c79dd991d.js"></script>
	<?php include 'includes/form_state_options.php'; // Display certain parts of the form if posted ?>
	<link rel="stylesheet" href="stylesheets/prayerengine/pe_screen.css" type="text/css" /><!-- prayer engine styles -->
	<link rel="stylesheet" href="stylesheets/prayerengine/color_schemes/<?php echo $settings['stylesheet']; ?>" type="text/css" /><!-- prayer engine color scheme -->
	<!-- MY STYLESHEETS -->
	<link rel="stylesheet" href="../../_css/main.css?v3"/>
	<!-- Display fixes for Internet Explorer -->
	<!--[if lte IE 6]>
	<link href="stylesheets/prayerengine/ie6_fix.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
	<link href="stylesheets/prayerengine/ie7_fix.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 8]>
	<link href="stylesheets/prayerengine/ie8_fix.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- end display fixes for Internet Explorer -->
<!-- END PRAYER ENGINE HEADER FILES -->
</head>
<body class="prayerWall">
<?php $globalFunction->includeContent(2,'frenchHeader'); ?>
<div id="prayerengine"><!-- "prayerengine" body id must be present for correct styling -->
	<div class="container">
		<div class="row">
			<h1>Mur de Prière Charis</h1>
		</div>
		<div class="row">
<!-- PRAYER ENGINE PRAYER WALL - EDIT AT YOUR OWN RISK! -->	
			<div id="pe-container">
				<!-- begin prayer request submit form -->
				<div id="pe-submit-container">
					<div id="pe-form-header">
						<a href="#" id="pe-share-button"><?php if ($_POST) { ?>Fermer le formulaire<?php } else { ?>Partagez votre sujet de prière<?php } ?></a>
						<h2><?php if ($_POST) { ?>Formulaire de sujets de prière<?php } else { ?>Sujets de prières récents<?php } ?></h2>
					</div>
					
					<div id="pe-form-container" <?php if ($_POST) {echo 'style="display: block;"';} ?>>
						<?php if (!empty($errors)) { // PHP Errors ?>
						<div id="errors">
							<p>Votre sujet de prière ne peut pas être soumis en raison des erreurs suivantes :</p>
							<ul>
							<?php foreach ($errors as $error) {
								echo "<li>$error</li>";
							}; ?>	
							</ul>
						</div>
						<?php }; ?>
					
						<?php if ($_POST && empty($errors)) { // Success Message ?>
						<div id="success">
							<p>Merci d'avoir soumis votre sujet de prière. Elle est actuellement en attente de modération, et sera ensuite publiée selon vos instructions. N'hésitez pas à soumettre une autre demande en remplissant à nouveau le formulaire.</p>
						</div>
						<?php }; ?>
					
						<p class="instructions">Vous pouvez ajouter votre sujet de prière à notre mur pour la prière en utilisant le formulaire ci-dessous. Dès que nous aurons reçu votre demande, nous la partagerons selon vos instructions. N'hésitez pas à soumettre autant de sujets de prières que vous le souhaitez !</p>
						
						<form action="index.php" method="post" id="prayerform">
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="label"><label for="name">Votre nom&nbsp;:</label></td>
									<td class="inputcell"><input type="text" name="name" value="<?php if ($_POST && !empty($errors)) {echo htmlspecialchars(stripslashes($_POST['name']));}; ?>" id="name" tabindex="1" /></td>
								</tr>
								<tr>
									<td class="label"><label for="email">Votre adresse mail&nbsp;:</label></td>
									<td class="inputcell"><input type="text" name="email" value="<?php if ($_POST && !empty($errors)) {echo htmlspecialchars(stripslashes($_POST['email']));}; ?>" id="email" tabindex="2" /></td>
								</tr>
								<!-- <tr>
									<td class="label"><label for="phone">Your Phone:</label></td>
									<td class="inputcell"><input type="text" name="phone" value="<?php if ($_POST && !empty($errors)) {echo htmlspecialchars(stripslashes($_POST['phone']));}; ?>" id="phone" tabindex="3" /></td>
								</tr> -->
								<tr>
									<td class="label"><label for="desired_share_option">Veuillez sélectionner&nbsp;:</label></td>
									<td>
										<select name="desired_share_option" id="desired_share_option" tabindex="4">
											<option value="Share Online" <?php if ($_POST && !empty($errors) && ($_POST['desired_share_option'] == "Share Online")) {?>selected="selected"<?php }; ?>>Partagez ce sujet</option>
											<option value="Share Online Anonymously" <?php if ($_POST && !empty($errors) && ($_POST['desired_share_option'] == "Share Online Anonymously")) {?>selected="selected"<?php }; ?>>Partagez ce sujet de manière anonyme</option>
											<option value="DO NOT Share Online" <?php if ($_POST && !empty($errors) && ($_POST['desired_share_option'] == "DO NOT Share Online")) {?>selected="selected"<?php }; ?>>NE partagez PAS cette information</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="label"><label for="prayer">Votre demande de&nbsp;prière :</label></td>
									<td class="prayercell">
										<textarea name="prayer" rows="10" cols="50" id="prayer" tabindex="5"><?php if ($_POST && !empty($errors)) {echo htmlspecialchars(stripslashes($_POST['prayer']));}; ?></textarea>
									</td>
								</tr>
							</table>
						
							<?php if (TWITTER == 'yes') { // Take Prayer Tweets if Enabled ?>
							<div id="pe-twitter-area">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td class="label"><label for="prayer_tweet">Prayer Tweet:</label></td>
										<td>
											<textarea name="prayer_tweet" rows="10" cols="50" id="prayer_tweet" tabindex="8"><?php if ($_POST && !empty($errors)) {echo htmlspecialchars(stripslashes($_POST['prayer_tweet']));} else { ?>Please list your prayer request as you would like it to appear on our Twitter Prayer Chain.<?php } ?></textarea>
											<p class="twitter-counter"><span id="counter">0</span>&nbsp;characters remaining.</p>
										</td>
									</tr>
								</table>
							</div>
							<?php } ?>
							
							<?php if ( NOSPAM == 1 ) { // Optional reCAPTCHA spam protection ?>
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="label"><label for="spam">Protection contre le spam :</label></td>
									<td class="spamcell">
										<?php 
											$enmpe_siteKey = '6Le4MycTAAAAADzLHCoic0WLlNPqKPMJwjojvWbK';
											$lang = 'fr';
										?>
										<div class="g-recaptcha" data-sitekey="<?php echo $enmpe_siteKey; ?>"></div>
										<script type="text/javascript"
											src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
										</script>
									</td>
								</tr>
							</table>
							<?php } ?>

							<div id="pe-submit-area">
								<input name="notifyme" id="notifyme" type="checkbox" value="1" class="check" tabindex="6" <?php if ($_POST && !empty($errors) && isset($_POST['notifyme'])) {echo 'checked="checked"';} ?> /> <label for="notifyme" class="checkbox">Envoyez-moi un mail quand quelqu'un prie pour moi</label>
								<?php if (TWITTER == 'yes') { // If Prayer Tweets enabled ?>
								<input name="twitter_ok" id="twitter_ok" type="checkbox" value="1" class="check" tabindex="7" <?php if ($_POST && !empty($errors) && isset($_POST['twitter_ok'])) {echo 'checked="checked"';} ?> /> <label for="twitter_ok" class="checkbox">Share This on Twitter</label>
								<?php } ?>
								<input type="hidden" name="date_received" value="<?php echo date("Y-m-d H:i:s", time()) ?>" id="date_received" />
								<input type="hidden" name="prayer_count" value="0" id="prayer_count" />
								<input type="hidden" name="brand_new" value="1" id="brand_new" />
								<input type="hidden" name="post_this" value="0" id="post_this" />
							
								<input type="submit" value="Soumettre ma demande" class="submit" tabindex="9" />
							</div>
						</form>
					</div>
				</div>
				<div class="ie6-spacer"></div>
				<!-- end prayer request submit form -->
			
			
				<!-- list of prayer requests -->
				<?php include 'includes/pagination.php'; //Paginate Prayer Requests ?>
				<div id="pe-prayer-list">
				<?php $rowcycle = 'odd'; // Alternate odd and even rows from database
					foreach ($prayers as $prayer) { 
						if ($rowcycle == 'odd') {
							$rowcycle = 'even';
						} else {
							$rowcycle = 'odd';	
						}
				?>
					<div class="pe-prayer-<?php echo $rowcycle; ?>" id="prayer<?php echo $prayer['id'] ?>">
						<div class="pe-count-area" id="count<?php echo $prayer['id'] ?>">
							<form action="actions/update_prayer.php" id="form<?php echo $prayer['id'] ?>" method="post">
								<a href="#" class="submitlink">J'ai prié pour ça</a>
								<?php if ($prayer['prayer_count'] == 1) { ?>
								<h4>Prié <?php echo number_format($prayer['prayer_count'], 0, '.', ','); ?> fois.</h4>
								<?php } elseif ($prayer['prayer_count'] > 1) { ?>
								<h4>Prié <?php echo number_format($prayer['prayer_count'], 0, '.', ','); ?> fois.</h4>
								<?php } else {} ?>
								<?php $newcount = $prayer['prayer_count'] + 1 ?>
						
								<input type="hidden" name="prayer_count" value="<?php echo $newcount ?>"  />
								<input type="hidden" name="id" value="<?php echo $prayer['id'] ?>" class="id" />
							</form>
						</div>
						
						<h3><?php if ($prayer['share_option'] == "Share Online") {echo stripslashes($prayer['name']);} else {echo "Anonyme";}; if (($prayer['share_option'] == "Share Online") && (strlen($prayer['name']) == 0)) {echo "Anonyme";} ?></h3>
						
						<?php echo nl2p(stripslashes($prayer['posted_prayer'])) ?>
						
						<h4>Reçu: <?php echo date('j-m-Y', strtotime($prayer['date_received'])) ?></h4>
					</div>
				<?php } ?>
				</div>
			
				<?php include 'includes/pagination.php'; //Paginate Prayer Requests ?>
				
				<?php $dbc = null; // Close database connection ?>
				
				<!-- You may remove this logo if desired -->
				<h3 id="powered_by"><a href="http://www.theprayerengine.com" target="_blank">Powered by The Prayer Engine</a></h3>
				<!-- Please DO NOT remove this copyright, per the user license -->
				<p id="copyright">Prayer Wall &copy; <a href="http://www.theprayerengine.com" target="_blank">The Prayer Engine</a>. All rights reserved.</p>
				<!-- end list of prayer requests -->
			</div>
		</div>
	</div>
	
</div>
<!-- END PRAYER ENGINE PRAYER WALL v010919.gd  -->
<?php $globalFunction->includeContent(2,'frenchFooter'); ?>
<!-- Show Mobile Menu without jQuery -->
<script>
	var hamburger = document.getElementById("hamburger");

	hamburger.addEventListener("click", function(){
		var menu = document.getElementById("menu");
		var check = menu.classList.contains("active");

		if (check) {
			hamburger.classList.remove("active");
			menu.classList.remove("active");
		} else {
			hamburger.classList.add("active");
			menu.classList.add("active");
		}
	});
</script>


</body>
</html>
