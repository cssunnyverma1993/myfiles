<?php
include_once 'database.php';
if(isset($_POST['save']))
{
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$rollno=$_POST['rollno'];
mysqli_query($conn, "INSERT INTO userdata (firstname,lastname,rollno) VALUES ('$firstname','$lastname','$rollno')");
echo "data successfully added";
}
?>