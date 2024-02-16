<pre>
<?php
include 'libs/load.php';
//  print("_SERVER \n");
//  print_r($_SERVER);
//  print("_GET \n");
//  print_r($_GET);
//  print("_POST \n");
//  print_r($_POST);
//  print("_FILES");
// print_r($_FILES);
// signup("","","","");
// if(signup("surya","password","surya@sample.com","1111111111"))
// {
//     echo "signup success";
// }
// else
// {
//     echo "failed to sign up!!!!";   
// }
$mic1 = new mic(); //constructing the object
$mic2 = new mic();
$mic1->brand="hcl";
$mic2->brand="lg";
$mic1->price="rs.100";
$mic1->setprice("rs200");
?>
</pre>