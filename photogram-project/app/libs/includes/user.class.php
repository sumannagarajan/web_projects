<?php
class user {
    public static function signup($user,$pass,$email,$phone){
        $conn = database::getconnection();
         
         $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
         VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
         $error=false;
         
         if ($conn->query($sql) === TRUE) {
           $error=false;
         } else {
           //echo "Error: " . $sql . "<br>" . $conn->error;
           $error=$conn->error;
         }
         
        // $conn->close();
         return $error;
       }
}