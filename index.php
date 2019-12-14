<?php
/**
 *
 */
class Animal
{
  public $name;
  public $nickname;
  public $numberOfLegs;

  public function setName($name)
  {
    $this->name = $name;
  }
  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }
  public function getName()
  {
    return $this->name;
  }
  public function  getNickname()
  {
    return $this->nickname;
  }
}
?>
