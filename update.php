<?php
include_once'database.php';
if(isset($_POST['save'])) {
mysqli_query($conn,"UPDATE userdata SET firstname = '".$_POST['firstname']."',
	lastname = '".$_POST['lastname']."',
	rollno = '".$_POST['rollno']."' WHERE id='".$_POST['id']."' LIMIT 1");
header('location:select.php');
	$message="record successfully updated";
	}
	//header('location:select.php');
	$result=mysqli_query($conn,"SELECT * FROM userdata WHERE id='".$_GET['id']."'" );
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<div class="meaage"><?php if(isset($message)) { echo $message; } ?></div>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	firstname<input type="text" name="firstname" value="<?php echo $row['firstname'];?>">
	lastname<input type="text" name="lastname" value="<?php echo $row['lastname'];?>">
	Rollno<input type="text" name="rollno" value="<?php echo $row['rollno'];?>">
	<input type="submit" name="save" value="update">
</form>
</body>
</html>