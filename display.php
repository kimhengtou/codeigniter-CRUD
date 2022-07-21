<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
<title>meyy operation</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<dev class="container">
    <button class="btn btn-primary my-5"><a href="user.php" 
    class="text-light"> Add user</a>
    <table class="table">
  

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">number</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from meyy";
$result=mysqli_query($con,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $name=$row['Name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
         
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
        <button class="btn btn-danger"><a href="testlist.php?listingid='.$id.'" class="text-light">list</a></button>
        </td>
    

      </tr>';
    }
}

  ?>

    
  </tbody>
</table>
</dev>

</body>
</html>

