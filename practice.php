<?php
//update array items in foreach loop
$favsanks = array("chips", "biscut", "carmelcandies", "piza", "burger", "bondas");
foreach ($favsanks as &$x) {
    $x = "potato chips";

}
unset($x); //with unset function
//$x = "cookkies";
print_r($favsanks);
