<?php

$ch = curl_init('http://localhost/iaicamp/xml.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$list = simplexml_load_string($result);

echo "<table>\n";
foreach ($list as $item) {
	echo "<tr>\n";
	echo "<td>". $item . "</td>";
	echo "</tr>\n";
}
echo "</table>\n";