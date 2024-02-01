<?php
//array sorting by using sort function
$age = array("suman" => "23", "aravind" => "12", "krishna" => "10");
ksort($age); //sorts an associative array in ascending order, according to the key:
print_r($age);
