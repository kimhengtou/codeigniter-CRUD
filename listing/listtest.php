<?php
$hostname="localhost";
$dbname="kimheng";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","$dbname");
if(mysqli_connect_errno()){
    echo"Connection failed ..".mysqli_connect_errno();

}
$result=mysqli_query($conn,"select * from meyy");
echo"<center>";
echo"<h1> list name</h1>";
echo"<h2>PHP Tutorials</h2>";
echo"<hr/>";
echo"<select>";
echo"<option>--list--</option>";
while($row=mysqli_fetch_array($result)){
    echo"<option>$row[id] | $row[name]</option>";

}
echo"</select>";
echo"</center>";
mysqli_close($conn);


?>