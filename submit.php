<?php
//add captcha
$server = "localhost";
$user = "USER";
$pass = "PASS";
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

/*
too sleep deprived but something something check values
if (count($_POST) < 1){
	header('Location: http://opiceisis.strangled.net/error.php');
	die("Not enough information on submit!");
}
*/

$query = "
INSERT INTO `$db`.`isismembers` (`id`, `realname`, `location`, `twitter`, `facebook`, `youtube`, `other`, `dateadded`) VALUES (NULL, '$realname', '$loc', '$twitter', '$facebook', '$youtube', '$other', '$timestamp');";

mysql_query($query);
echo "<h2>Added!</h2>";
header("Location:http://opiceisis.strangled.net/");

?>
