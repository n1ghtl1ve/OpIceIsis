<?php
//captcha_code
php session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue

  // or you can use the following code if there is no validation or you do not know how
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  exit;
}

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

$count = "0";
if (isset($realname) && ($pic) && ($loc) && ($twitter) && ($facebook) && ($youtube)  && ($other)!= ""))
  {
  $count++;
  }
else
  {
  echo "Fill out the Form pls";
  }

if ($count >= 2) {
	$query = "
	INSERT INTO `$db`.`isismembers` (`id`, `realname`, `location`, `twitter`, `facebook`, `youtube`, `other`, `dateadded`) VALUES (NULL, '$realname', '$loc', '$twitter', '$facebook', '$youtube', '$other', '$timestamp');";

	mysql_query($query);
	echo "<h2>Added!</h2>";
	header("Location:http://opiceisis.strangled.net/");
}



?>
