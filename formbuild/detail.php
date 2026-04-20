<?php
$conn=mysqli_connect("localhost","root","","jobform");

if(!$conn){
    die("Connection request failed ".mysqli_connect_error());
}

$id=$_GET['id'];

$stmt=$conn->prepare("SELECT*from applicants where id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$result=$stmt->get_result();
$row=$result->fetch_assoc();



?>

<html>
<h2>Applicant Submitted Detail</h2>

<p><b>ID:</b> <?php echo $row['id']; ?></p>
<p><b>Name:</b> <?php echo $row['fname'] . " " . $row['lname']; ?></p>
<p><b>Email:</b> <?php echo $row['email']; ?></p>
<p><b>Phone:</b> <?php echo $row['phonenumber']; ?></p>
<p><b>Gender:</b> <?php echo $row['gender']; ?></p>
<p><b>DOB:</b> <?php echo $row['dob']; ?></p>
<p><b>State:</b> <?php echo $row['state']; ?></p>
<p><b>City:</b> <?php echo $row['city']; ?></p>
<p><b>Nationality:</b> <?php echo $row['nationality']; ?></p>
<p>Resume: <a href="uploads/<?php echo $row['cv']; ?>" target="_blank">View PDF</a><br><br></p>

<button><a href="view.php">Back</a></button>

</html>