<?php
include 'connect.php';
 //include "css/backgrounds.css"; 
 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $Password=$_POST['password'];

    $sql="insert into `meyy` (Name,email,mobile,password)
    values('$name','$email','$mobile','$Password')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('localhost:display.php');
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
     name="name" autocomplete="off"> 
     
</div>
<div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your email" 
     name="email" autocomplete="off">
</div>
<div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your mobile" 
     name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your password" 
     name="password" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary"name='submit'>Add user</button>
</form>
</div>

<?php
include('bach.html');
?>...
  </body>
</html>