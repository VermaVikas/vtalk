<?php

$ftext = "";
$file = fopen("app.txt", "r");
while (!feof($file)) {
    echo "<tr><td>" . fgets($file) . "</td></tr>";
}
fclose($file);


?>