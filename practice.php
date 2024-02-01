<?php
//Remove itemfrom associatice array
$cars = array("name" => "honda", "model" => "city", "year" => "1995");
unset($cars["year"]);
print_r($cars);
