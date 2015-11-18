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
$query = "SELECT * FROM isismembers;";
$result = mysql_unbuffered_query($query);

$file = fopen("../archive.txt", "w") or die ("Unable to open file!");
fwrite($file, '{"ArchiveDate":"'.$timestamp.'"},');
while ($row = mysql_fetch_object($result)){
	fwrite($file, json_encode($row));
	fwrite($file, ",");
}
fclose($file);

?>
