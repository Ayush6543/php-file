<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Vehicle {
    private $speed;   

    
    public function setSpeed($s) {
        if ($s >= 0 && $s <= 200) {
            $this->speed = $s;
        } else {
            echo "Invalid speed<br>";
        }
    }

    
    public function getSpeed() {
        return $this->speed;
    }

    
    public function accelerate($increment) {
        $newSpeed = $this->speed + $increment;

        if ($newSpeed <= 200) {
            $this->speed = $newSpeed;
        } else {
            echo "Speed limit exceeded<br>";
        }
    }
}


$car = new Vehicle();

$car->setSpeed(60);
$car->accelerate(20);

echo $car->getSpeed();   

?>
</body>
</html>