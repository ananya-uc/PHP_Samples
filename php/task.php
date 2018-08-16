<?php
$file = fopen("/home/mis/Downloads/Contact_1526447958103.csv","r");
$row1=fgetcsv($file);
print_r($row1);
fclose($file);
?>



