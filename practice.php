<?php
// loop through an array by using for loop

$stuname = array("suman", "ram", "gopal", "shiva", "mohan", "arun", "bala", "hariharan", "viknesh", "subash");
$len = count($stuname);
for ($i = 0; $i < $len; $i++) {
    echo "stuname[$i] = $stuname[$i]" . "<br>\n";
}
