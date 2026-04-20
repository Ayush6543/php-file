<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="cynoteck.png"width="100" height="80" class="d-inline-block align-top" alt="">
    
  </a>
</nav>
<body>
    <h2 style="color: red;">Application Form</h2>
<form action="Formbuild.php" method="POST" enctype="multipart/form-data">
        
        First Name: <input type="text" name="fname" required ><br>
           
        Last Name: <input type="text" name="lname" required><br>

        Enter your email: <input type="email" name="email" ><br>
        Phone Number: <input type="tel" name="phonenumber" required><br>
        <label for="gender">Gender: 
            Male<input type="radio" name="gender" value="male">
            Female<input type="radio" name="gender" value="female">
            Other<input type="radio" name="gender" value="other">
        </label><br>
        Date of birth: <input type="date" name="dob" required><br>
        State: <select name="state" id="state" required>
            <option value=" ">--select your state--</option>
            <option value="Uttarakhand">Uttarakhand</option>
            </select>
        City: <select name="city" id="city" name="city" required>
            <option value="">--select your city--</option>
            <option value="Dehradun">Dehradun</option>
            <option value="Haridwar">Haridwar</option>
            <option value="Roorkee">Rorkee</option>
            <option value="Haldwani">Haldwani</option>
        </select>

        
        <label for="nationality">Nationality:</label>
        <input type="text" name="nationality" list="countries" required>

        <datalist id="countries">
        <option value="India">
        <option value="United States">
        <option value="United Kingdom">
        <option value="Canada">
        <option value="Australia">
        <option value="Germany">
        <option value="France">
        <option value="China">
        <option value="Japan">
        </datalist><br>
    Upload your CV<input type="file" name="cv" accept=".pdf"required><br>
    
    <label for="Role interested in:">Role interested in: </label> 
    <input type="checkbox" name="role[]" value="software developer">software developer
    <input type="checkbox" name="role[]" value="Data Analyst">Data Analyst
    <input type="checkbox" name="role[]" value="salesforce">salesforce<br>
    <div class="form-floating">
    Description <textarea class="form-floating" placeholder="Write about yourself in 200-300words" name="floatingtextarea" style="height: 50px ; width:500px"></textarea>
    </div>
    <input type="reset" value="reset">
    <button type="submit">Submit</button>
        
        
    </form>

    
    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="jobform";
    $conn=mysqli_connect($servername,$username,$password,$dbname);



    if(!$conn){
        die("Connection failed".mysqli_connect_error($conn));
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        
        $email=$_POST["email"];
        $mobile=$_POST["phonenumber"]??"";
        $gender=$_POST["gender"];
        $dateOfbirth=$_POST["dob"];
        $state=$_POST["state"];
        $city=$_POST["city"];
        $nationality=$_POST["nationality"];
        
        $roles = isset($_POST['role']) ? $_POST['role'] : [];
        $description=$_POST["floatingtextarea"];
        $mobile=trim($mobile);
        $length=strlen($mobile);
        
        echo "Details you mentioned <br>";

    $firstname = trim($_POST["fname"]);
    $lastname = trim($_POST["lname"]);
    if (empty($firstname)) {
        echo "<p style='color:red;'>First name is required</p>";
    }
    if (empty($lastname)) {
        echo "<p style='color:red;'>Last name is required</p>";
    }
    if (!empty($firstname) && !empty($lastname)) {
        echo "First Name: " . htmlspecialchars($firstname) . "<br> Last Name:" . htmlspecialchars($lastname)."<br>";
    }
        
        if($length==10 and is_numeric($mobile) and $mobile[0]>=6){
            echo "Phone number: ".$mobile;
        }
        else { 
            echo"Phone number: Number is wrong";
        }



    $email = trim($_POST["email"] ?? "");

    if (empty($email)) {
        echo "<p style='color:red;'>Email is required</p>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Invalid email format</p>";
    }
    else {
        echo "<br>Email: " . htmlspecialchars($email) . "<br>";
        }



$file_name = $_FILES["cv"]["name"];
$file_tmp = $_FILES["cv"]["tmp_name"];
$file_type = $_FILES["cv"]["type"];
$file_size = $_FILES["cv"]["size"];


$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

$new_name = time() . "_" . $file_name;

if($file_ext != "pdf"){
    die("Only PDF files allowed");
}

if($file_type != "application/pdf"){
    die("Invalid file type");
}


$upload_path = __DIR__ . "/uploads/" . $new_name;

move_uploaded_file($file_tmp, $upload_path);

$resume = $new_name;





 $sql="Insert into Applicants(fname,lname,email,phonenumber,gender,dob,state,city,nationality,cv)VALUES(?,?,?,?,?,?,?,?,?,?)";
        
  $stmt = $conn->prepare($sql);

    $stmt-> bind_param(

             "ssssssssss",
            $firstname,
            $lastname,
            $email,
            $mobile,
            $gender,
            $dateOfbirth,
            $state,
            $city,
            $nationality,
            $resume
        );
            if ($stmt->execute()) {
                echo "<br><b>Data inserted successfully!</b>";
            } else {
                echo "Error: " . $stmt->error;
            }
            
            $stmt->close();
            $conn->close();

    }
   
    
    
    ?>
</body>
</html>