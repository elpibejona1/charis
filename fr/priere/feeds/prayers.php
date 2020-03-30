<?php /* Prayer Engine - RSS Feed of All Public Prayer Requests */
	
	require_once '../config/subdirectories.php';
	require_once '../gdphp/config/engineconfig.php';
	require_once '../' . DATABASE;
	
	$enmpe_displaylimit = DISPLAYLIMIT;
	
	
	if ( $enmpe_displaylimit == "3days" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 2 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "1week" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 6 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "2weeks" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 13 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "month" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "2months" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 60 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "3months" ) {
		$enmpe_displaylimitsql = "AND (DATE_SUB(CURDATE(),INTERVAL 90 DAY) <= date_received || date_received = CURDATE())";
	} elseif ( $enmpe_displaylimit == "nolimit" ) {
		$enmpe_displaylimitsql = "";
	}
	
	$getapprovedprayers = "SELECT * FROM prayers WHERE post_this = 1 AND (share_option = 'Share Online' OR share_option = 'Share Online Anonymously') " . $enmpe_displaylimitsql . " ORDER BY date_received DESC";
	$prayers = $dbh->query($getapprovedprayers);
	header('Content-type: text/xml; charset=utf-8');
	echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
	
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title><?php echo RSS_TITLE ?></title>
    <link><?php echo BASE_URL ?></link>
    <description><?php echo RSS_DESCRIPTION ?></description>
    <copyright><?php echo MINISTRYNAME ?></copyright>
    <language>en-us</language>
	<atom:link href="<?php echo BASE_URL; ?>feeds/prayers.php" rel="self" type="application/rss+xml" />
	<?php foreach ($prayers as $prayer) { ?>
	<item>
      <title><?php if (($prayer['share_option'] == "Share Online Anonymously") || (($prayer['share_option'] == "Share Online") && (strlen($prayer['name']) == 0))) { ?>Anonymous Prayer Request<?php } else { ?>Prayer Request From <?php echo htmlspecialchars(stripslashes($prayer['name'])); ?> <?php }; ?></title>
      <description><?php echo htmlspecialchars(stripslashes($prayer['posted_prayer'])) ?></description>
      <pubDate><?php echo date('D, d M Y H:i:s T', strtotime($prayer['date_received'])) ?></pubDate>
      <link><?php echo BASE_URL . 'index.php'; ?></link>
	  <guid><?php echo BASE_URL . 'index.php#' . $prayer['id']; ?></guid>
    </item>
	<?php } ?>
  </channel>
</rss>
<?php $dbc = null; ?>