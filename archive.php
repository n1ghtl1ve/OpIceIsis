<?php
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

//exec("mysql -u $user --password=$pass -e 'SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers' $db > ./dump/dump.txt");
$query = "
                SELECT realname, location, twitter, facebook, youtube, other, dateadded FROM isismembers;";
$result = mysql_query($query, $conn);

$file = fopen("dump.txt", "w") or die ("Unable to open file!");

fwrite($file, "realname,location,twitter,facebook,youtube,other,dateadded\n");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                fwrite($file, "{$row['realname']},{$row['location']},{$row['twitter']},{$row['youtube']},{$row['other']},{$row['dateadded']}\n");
}
fclose($file);

$read = fopen("dump.txt", "r") or die ("Unable to open file!");
while (($buffer = fgets($read, 4096)) !== false) { 
	echo "<p>$buffer</p>";
} 
fclose($read);

?>
