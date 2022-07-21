<?php
$link = mysqli_connect("localhost","root","mysql","db_users");
$result = mysqli_query($link,"SELECT * FROM tbl_users");
$count = mysqli_num_rows($result);
if($count>0)
{
	/*$row = mysqli_fetch_assoc($result);
	echo $row['name'];
	$row = mysqli_fetch_assoc($result);
	echo $row['name'];
	$row = mysqli_fetch_assoc($result);
	echo $row['name'];
	$row = mysqli_fetch_assoc($result);
	echo $row['name'];
	$row = mysqli_fetch_assoc($result);
	echo $row['name'];*/
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['name']."<br>";
	}
}
?>
