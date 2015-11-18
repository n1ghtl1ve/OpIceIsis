<?php
$server = "localhost";
$user = "guru";
$pass = "Pr0misemethis?";
$db = "opiceisis";
$timestamp = date("Y-m-d H:i:s"); 

$conn = mysql_connect($server, $user, $pass);
if (!$conn)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($db, $conn);
$query = "SELECT twitter FROM isismembers WHERE (twitterstatus = 1);";
$result = mysql_unbuffered_query($query);


while ($row = mysql_fetch_object($result)){
	$twitter = {$row['twitter']};
	//remove @
	//parse twitter url for username
	//check for just username
	echo $twitter;
}

?>
