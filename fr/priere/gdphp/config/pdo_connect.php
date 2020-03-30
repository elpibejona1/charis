<?php /* Prayer Engine - Database Connection Script */

$username = "Charis_prayer"; // Enter Your DB User Name Here
$password = "Charis5#"; // Enter Your DB Password Here
$host = "50.62.209.109:3306"; // Enter your DB host name here - BE SURE TO LEAVE OFF THE HTTP://
$database_name = "Charis_fra"; // Enter Your DB Name Here

try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $database_name, $username, $password);
    }
catch(PDOException $e) {
	echo '<h2>Hmmm... I can\'t connect to the database.</h2><p>It looks like your files are uploaded to the right place, but the login credentials for the database connection are incorrect.</p><p>Be sure that your username, password, host name and database name are all correct and spelled correctly in <em>\'php/config/pdo_connect.php\'</em>.</p>';
}

$pe_connected_okay = "yep";

?>