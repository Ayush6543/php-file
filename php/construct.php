<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruits{
        public $name;
        public $season;
    
    function __construct($name,$season){
        $this->name=$name;
        $this->season=$season;
    }
    
    function get_details(){
        echo "Name: ".$this->name." <br>Season: ".$this->season;
    }
}
$apple=new Fruits("Mango","Summer");
$apple->get_details();

    
    
    
    
    
    
    ?>
</body>
</html>