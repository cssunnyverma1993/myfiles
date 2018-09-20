<?php
$server="localhost";
$username="root";
$password="";
$dbname="sunny";
$conn= mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
die('conund not connnected error:'.mysqli_error());
}
?>