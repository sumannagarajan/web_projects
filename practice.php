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
//display the arrays content.
print_r($student_details);
//accessing the 2D array.
echo $student_details[0][2] . "<br>";
echo $student_details[2][2] . "<br>";

?>
        </pre>
  </body>
</html>
