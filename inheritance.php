<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    class ParentClass {
        public function Hello() {
            echo "Hello from Parent!";
        }
    }
    
    class ChildClass extends ParentClass {
        public function Hi() {
            echo "Hi from Child!";
        }
    }
    
    $obj = new ChildClass();
    $obj->Hello(); 
    $obj->Hi();    
    
    
    
    ?>
</body>
</html>