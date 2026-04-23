<?php
include('teacher.php');
include('student.php');

$teacher=new teacher\JoiningDate();
$teacher->JoiningDate();
echo"<br>";
$student=new student\JoiningDate();
$student->AdmissionDate();

?>