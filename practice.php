<?php
// remove array by using splice function
//it will re arrage the array in unset function will not re-arrange the array
$randomnames = array("suman", "viknesh", "arun", "vimal", "nantha", "surya", "arul", "sri");
array_splice($randomnames, 0, 1); //it will delete the 0th iteam
print_r($randomnames);
