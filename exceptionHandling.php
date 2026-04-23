<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero not allowed");
    }
    return $a / $b;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "<br>Execution completed";
}
?>       