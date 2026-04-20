<?php
$conn = mysqli_connect("localhost","root","","jobform");

$result = mysqli_query($conn, "SELECT * FROM applicants");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>

<h2>Applicants Data</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>State</th>
        <th>City</th>
        <th>Role</th>
        <th>CV</th>
    </tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phonenumber']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['dob']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td>
            <a href="uploads/<?php echo $row['cv']; ?>" target="_blank">View CV</a>
        </td>
        <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
        <td><a href="detail.php?id=<?php echo $row['id'];?>">See Detail</a></td>
    </tr>
<?php
}
?>

</table>

</body>
</html>