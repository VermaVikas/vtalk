<?php

$txtString = $_POST["textStr"] ."\n";
$myfile = fopen('app.txt', 'a+');
fwrite($myfile, $txtString);
fclose($myfile);

?>
