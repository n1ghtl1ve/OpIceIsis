<?php
$read = fopen("dump.txt", "r") or die ("Unable to open file!");
while (($buffer = fgets($read, 4096)) !== false) { 
	echo "<p>$buffer</p>";
} 
fclose($read);

?>
