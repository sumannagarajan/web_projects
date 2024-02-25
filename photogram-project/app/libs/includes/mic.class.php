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
    public $brand;
    public $color;
    public $port;
    public $model;
    public $light;
    public $price;
    
    public static function testfunction()
    {
        printf("THIS IS SAMPLE FUMCTION FOR PRACTICE");
    }

    public function setlight($light)
    {
    $this->light = $light;
    }

}