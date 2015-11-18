<?php
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

$query = "
                SELECT realname, location, twitter, twitterstatus, facebook, youtube, other, dateadded FROM isismembers;";
$result = mysql_query($query, $conn);

$file = fopen("../dump.txt", "w") or die ("Unable to open file!");

fwrite($file, "Archived at: $timestamp\n");
fwrite($file, "realname,location,twitter,twitterstatus,facebook,youtube,other,dateadded\n");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                fwrite($file, "{$row['realname']},{$row['location']},{$row['twitter']},{$row['twitterstatus']},{$row['youtube']},{$row['other']},{$row['dateadded']}\n");
}
fclose($file);

?>
