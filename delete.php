<?php
include_once 'database.php';
mysqli_query($conn,"DELETE FROM userdata WHERE id='".$_GET['id']."'");
header('location:select.php');
?>