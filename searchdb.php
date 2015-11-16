<?php
#mysql info
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

if ($_POST['cat'] == "Realname"){
	$realname = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE realname LIKE '%$realname%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}
else if ($_POST['cat'] == "Location"){
	$location = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE location LIKE '%$location%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}
else if ($_POST['cat'] == "Twitter"){
	$twitter = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE twitter LIKE '%$twitter%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}
else if ($_POST['cat'] == "Facebook"){
	$facebook = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE facebook LIKE '%$facebook%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}
else if ($_POST['cat'] == "Youtube"){
	$youtube = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE youtube LIKE '%$youtube%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}
else if ($_POST['cat'] == "Other"){
	$other = mysql_real_escape_string($_POST['text']);
	$query = "
		SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers WHERE other LIKE '%$other%';
		";
	$result = mysql_query($query, $conn);
	if (! $result){
		die ("Could not fetch data: " . mysql_error());
	}
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo "Realname: {$row['realname']}<br>".
	     	"Location: {$row['location']}<br>".
	     	"Twitter: {$row['twitter']}<br>".
	     	"Facebook: {$row['facebook']}<br>".
	     	"Youtube: {$row['youtube']}<br>".
	     	"Other: {$row['other']}<br>".
	     	"Dateadded: {$row['dateadded']}<br>".
	     	"<br><p>----------------------------------------------</p>";
	}
}

//header("Location:http://opiceisis.strangled.net/");

?>
