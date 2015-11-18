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

if ("" == trim($_POST['captcha_code'])){
	die("empty captcha!");
}
if ($_POST['captcha_code'] == $_SESSION['captcha_spam']) {
$count = "0";
if (isset($realname)!= "")
  {
  $count++;
  }
elseif(isset($pic)!= "")
  {
  $count++;
  }
elseif(isset($loc)!= "")
	{
	$count++;
	}
elseif(isset($twitter)!="")
	{
		$count++;
	}
elseif(isset($twitter)!="")
	{
		$count++;
	}
elseif(isset($facebook)!="")
	{
		$count++;
	}
elseif(isset($youtube)!="")
	{
		$count++;
	}
elseif(isset($other)!="")
	{
		$count++;
	}
else {
	echo "Please fill out the form";
	}

if ($count >= 2) {
	$query = "
	INSERT INTO `$db`.`isismembers` (`id`, `realname`, `location`, `twitter`, `facebook`, `youtube`, `other`, `dateadded`) VALUES (NULL, '$realname', '$loc', '$twitter', '$facebook', '$youtube', '$other', '$timestamp');";

	mysql_query($query);
	echo "<h2>Added!</h2>";
	header("Location:http://opiceisis.strangled.net/");
}
}
else {
  echo "Wrong Captcha";
}


?>
