<pre>
    <?php
// it is in bulid function ----------> it will inisiatilize the session
//setcookie("testcookie", "testvalue", time() + (86400 * 30), "/");
include 'libs/load.php';

// $mic1 = new mic();//constructing the object
// $mic2 = new mic();

// $mic1->brand="samsung";
// $mic2->brand="poco";
// printf($mic1->brand);
// echo "<br>"; 
// printf($mic2->brand);
// $mic1->light="blue";
// $mic1->setlight("green");
// printf($mic1->light);
// mic ::testfunction();   
// $conn = database::getconnection();
print("_SESSION \n");
print_r($_SESSION);
//we can persist data acrosss requests.
if(session::isset('a')){
    printf("a is alredy is there value ".session::get('a')."\n");
}else{
    session::set('a',time());
    print("assing the value of a is $_SESSION[a]\n");
}

?>
</pre>