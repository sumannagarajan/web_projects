
<?php
//variable no of arrguements
function sumarr(...$a) // variadic function / variadic function becomes array
{
    return array_sum($a);
}
$x = sumarr(10, 3, 4, 5, 6, 7, 3);
echo $x;
