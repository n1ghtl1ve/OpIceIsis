<?php
//captcha_code
session_start();

$server = "localhost";
$user = "";
$pass = "";
$db = "opiceisis";
$timestamp = date("Y-m-d H:i:s");

$conn = mysql_connect($server, $user, $pass);
if (!$conn)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($db, $conn);

$realname = mysql_real_escape_string($_POST['realname']);
$pic = mysql_real_escape_string($_POST['pic']);
$loc = mysql_real_escape_string($_POST['loc']);
$twitter = mysql_real_escape_string($_POST['twitter']);
$facebook = mysql_real_escape_string($_POST['facebook']);
$youtube = mysql_real_escape_string($_POST['youtube']);
$other = mysql_real_escape_string($_POST['other']);


if ($_POST['captcha_code'] == $_SESSION['captcha_spam']) {
	$query = "
	INSERT INTO `$db`.`isismembers` (`id`, `realname`, `location`, `twitter`, `twitterstatus`, `facebook`, `youtube`, `other`, `dateadded`) VALUES (NULL, '$realname', '$loc', '$twitter', 1, '$facebook', '$youtube', '$other', '$timestamp');";

	mysql_query($query) or die("query failed". mysql_error());
	echo "<h2>Added!</h2>";
	header("Location: http://opiceisis.strangled.net");
}
else {
  echo "Wrong Captcha!";
}


?>
