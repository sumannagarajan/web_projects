<?php
/*
function funadd($a, $b)
{
$c = $a + $b;
return $c;
}
echo funadd(20, 23) . "<br>";       // function------> passing value to the arruguments
echo funadd(2, 4) . "<br>";
echo funadd(22, 3) . "<br>";*/

function mul5(&$value)
{
    $value = $value * 5;
}
$num = 7;
mul5($num); //function ------> passing reference to the arruguments
echo "$num <br>";
