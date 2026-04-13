<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
class Car {
  public $name;
  public $color;
  
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }

  public function intro() {
    echo "The car:  $this->name and the color is: $this->color."; 
  }
}

class audi extends car {
  public $price;
  
  public function __construct($name, $color, $price) {
    $this->name = $name;
    $this->color = $color;
    $this->price = $price; 
  }
  
  public function intro() {
    echo "$this->name is $this->color, and the price is $this->price crore Rs."; 
  }
}

$audi = new audi("Audi", "red", 1.2);
$audi->intro();
?>
 


</body>
</html>