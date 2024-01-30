<?php
//example for variadic function
function sumarr(...$x)
{
    $len = count($x);
    $n = 0;
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n; //It will retunrs sum of array

}
$a = sumarr(10, 20, 30, 40, 50);
echo "$a";
