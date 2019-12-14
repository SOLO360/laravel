<?php
/**
 *
 */
/**
 *
 */
class Rectangle
{
  //declare attributes
  public $width = 0;
  public $height = 0;

  //declare method
  public function setSize($w='0',$h='0')
  {
    $this->width = $w;
    $this->height = $h;
  }

  //method to calculate area
  public function getArea()
  {
    return 'The area of the rectangle is '.($this->width * $this->height);
  }

  //method to calculate perimeter
  public function getPerimeter()
  {
    return 'The perimeter of the rectangle is '.(($this->width + $this->height)*2);
  }

  //method check if it is a square
  public function getSquare()
  {
    if($this->width == $this->height){
      return 'It is a square';
    }else {
      return 'It is not a square';
    }
  }
}
