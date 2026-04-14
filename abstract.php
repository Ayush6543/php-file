<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*abstract class Animal{
        abstract public function Sound();

        public function eat(){
            echo "Animal eats";
        }
    }


    class Dog extends Animal{
        public function sound(){
            echo "Dog barks";
        }
    }

    $obj =new Dog();
    $obj->sound();
    $obj->eat();
*/
    
abstract class Employee {
    abstract public function calculateSalary();
}

class FullTimeEmployee extends Employee {
    public function calculateSalary() {
        return 30000;
    }
}

class PartTimeEmployee extends Employee {
    public function calculateSalary() {
        return 20000;
    }
}

$emp1 = new FullTimeEmployee();
echo "Employee 1 salary: ". $emp1->calculateSalary()."<br>";

$emp2 = new PartTimeEmployee();
echo"Employee 2 salary:". $emp2->calculateSalary();
    
    
    
    
    
    
    ?>
</body>
</html>