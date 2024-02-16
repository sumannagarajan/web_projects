<?php
//class.mic.php
/*
Acess specifiers
----------------
1.public
2.private
3.protected
*/
class mic{
    function __construct()
    {
        printf ("constructing object");
    }
    public $brand;
    public $color;
    public $usb_port;
    public $modelname;
    public $light;
    public $price;
    public function setprice($price){
        print($price);
        printf($this->price);

    }
}
?>