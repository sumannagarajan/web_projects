<!DOCTYPE html>
<html>
    <head>
        <title>sample.page.com</title>
    </head>
    <body>
        <h2>heloow world PHP is fun</h2>
        <?php
//constant case sencetive

define("a", 10);
echo a;
echo "<br>";

//constant key word
const b = 90;
echo b;
echo "<br>";

// contants in array

define("myfav_fruits", ["mango", "banana", "apple", "orange"]);
echo myfav_fruits[0];
echo "<br>";
echo myfav_fruits[2];
echo "<br>";

//if statement in php

if (1) {
    echo "good morning.....";
}

?>
    </body>
</html>