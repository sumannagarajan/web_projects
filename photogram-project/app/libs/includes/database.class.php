<?php
class database {

    public static $conn = null;
    public static function getconnection(){
        if (database::$conn==null){
            $servername = "mysql.selfmade.ninja";
            $username = "suman";
            $password = "sna.login";
            $dbname = "suman_auth";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); //TOdo replace with exception handling
  }else{
    printf("new conncection establishing..........");
    database::$conn=$conn;
    return database::$conn=$conn;
  }
  }else{
    printf("exisiting connection returning.........");
        return database::$conn; 
    }
    }
}