<?php
$q = $_REQUEST["q"];


$myfile = fopen("naplo.txt", "a") or die("Unable to open file!");

fwrite($myfile, "\n". $q);
fclose($myfile);

echo $q === "" ? "no suggestion" : $q;

?>
