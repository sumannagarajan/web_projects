<?php
// remove array multiple items
$randomnames = array("suman", "viknesh", "arun", "vimal", "nantha", "surya", "arul", "sri");
unset($randomnames[5], $randomnames[0], $randomnames[1]);
print_r($randomnames);
