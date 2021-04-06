<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }

//tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo ("Chieu rong =". $rectangle->width); // 0utput: 10
echo ("Chieu dai = ".$rectangle->height); // output: 20
$rectangle->height = 30;
$rectangle->width = 20;
echo ("Chieu dai =".$rectangle->height); // 0utput: 30
echo ("Chieu rong =".$rectangle->width); // 0utput: 20
echo ("Dien tich=".$rectangle->getPerimeter()); // 0utput: 100
echo ("Chu vi =".$rectangle->getArea()); // Output: 600
echo ("Your Rectangle". $rectangle->display());
