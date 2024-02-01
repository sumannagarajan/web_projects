<!DOCTYPE html>
<html>
    <head>
        <title>practice.me</title>
    </head>
    <body>
        <h2>THIS IS SAMPLE PAGE</h1>
        <pre>
        <?php
//multidimensional array
//2D array.
$student_details = array(
    array("suman", "age22", "20ecl236"),
    array("surya", "age23", "20ecl237"),
    array("viknesh", "age 24", "20ecl241"),
);
//loop through the 2D array
for ($i = 0; $i < 3; $i++) {
    echo "row value is $i<br>";
    for ($j = 0; $j < 3; $j++) {
        echo $student_details[$i][$j] . "<br>";
    }
}
?>
    </pre>
  </body>
</html>
