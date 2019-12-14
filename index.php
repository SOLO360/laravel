<?php
/**
 *
 */
class HelloWorld
{
  //give a default language
    public function sayHello($langauge='English')
  {
    echo "<p>";
    //pass the greetings
    switch ($langauge) {
      case 'Maasai':
        echo "Suvai";
        break;
      case 'Chaga':
        echo "Unawari";
        break;
      case 'English':
        default:
        echo 'Hello World';
        break;
    }
    echo "</br>";
  }

}
