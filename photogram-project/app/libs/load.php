<?php
include_once 'includes/mic.class.php';
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/app/_templates/$name.php"; //consistent way

}
function validate_credential($username, $password)
{
    if ($username == "suman@sample.com" and $password == "password") {
        return true;
    } else {
        return false;
    }
}

function signup($user,$pass,$email,$phone){
  $servername = "mysql.selfmade.ninja";
  $username = "suman";
  $password = "sna.login";
  $dbname = "suman_auth";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
  VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
  $error=false;
  
  if ($conn->query($sql) === TRUE) {
    $error=false;//
  } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    $error=$conn->error;
  }
  
  $conn->close();
  return $error;
}

?>