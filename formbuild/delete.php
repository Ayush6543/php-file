<?php
$conn = mysqli_connect("localhost","root","","jobform");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM applicants WHERE id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        header("Location: view.php");
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
    $conn->close();
}
?>