<?php

session_start();

?>
<html>
    <body>
        <?php
        
        $_SESSION["favcolor"]="green";
        $_SESSION["favanimal"]="cat";
        echo "session variable set.";
        
        
        ?>
    </body>
</html>