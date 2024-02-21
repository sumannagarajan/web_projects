<?php
//class.mic.php
/*
Acess specifiers
----------------
1.public
2.private
3.protected
 */
class mic
{
    public function __construct($brand)
    {
        printf("constructing object");
        $this->brand = $brand;

    }
    public $brand;
    public $color;
    public $usb_port;
    public $modelname;
    public $light;
    public $price;
    public function setprice($price)
    {
        print($price);
        printf($this->price);

    }
}
