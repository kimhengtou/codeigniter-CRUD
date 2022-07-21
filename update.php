<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="select * from `meyy` where id=$id";
$result=mysqli_query($con,$sql);



$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $Password=$_POST['password'];
    //$re_password=$row['re password'];

    $sql="update `meyy` set id=$id,name='$name',
    email='$email',mobile='$mobile',password='$Password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "updated successfully";
        //header('localhost:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your name" 
     name="name" autocomplete="off" value=<?php
     echo $name;
     ?>> 
     
</div>
<div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your email" 
     name="email"  value=<?php
     echo $email;
     ?>>
</div>
<div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your mobile" 
     name="mobile" autocomplete="off" value=<?php
     echo $mobile;
     ?>>
</div>
<div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your password" 
     name="password" value=<?php
     echo $password;
     ?>>
</div>
  <button type="submit" class="btn btn-primary"name='submit'>update</button>
</form>
</div>
<?php
include('bach.html');
?>...
    
  </body>
</html>