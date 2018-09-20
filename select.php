<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}
td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}
tr:nth-child(even) {
background-color: white;
}
</style>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Roll NO</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
	$result = mysqli_query($conn," SELECT * FROM userdata ");
	
	$i=0;
	while($row=mysqli_fetch_array($result)){
		if($i%2==0)
			$classname="even";
		else
			$classname="odd";
		?>
		<tr class="<?php if(isset($classname)) echo $classname;?>">
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['firstname'];?></td>
		<td><?php echo $row['lastname'];?></td>
		<td><?php echo $row['rollno'];?></td>
		<td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
		<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>

</body>
</html>