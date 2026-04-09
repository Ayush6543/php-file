<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Employee($EmployeArr){
        $sum=0;
        foreach($EmployeArr as $value){
            $sum+=$value;

        }
        return $sum;
    }
    $Employee=[12,44,11,9,88,];    
    $TotalEmploye=Employee($Employee);
    echo" Total Nummber of Employee in all branches are $TotalEmploye <br>";
    
    
    
    
    
    
    ?>
</body>
</html>