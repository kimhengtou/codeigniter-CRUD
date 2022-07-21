<?php
//include 'connect.php';

$servername="localhost";
$dbname="meyy";
$password="";
$username="root";

$number=$name=$mobile=$password="";
$e_name=$e_name=$e_mobile=$e_password="";
//echo $_GET["id"];

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    $id = $_GET["id"];
    $sql = "SELECT * FROM meyy WHERE id = :id";
    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$number ,$name, $mobile, $password);
        $sql = "SELECT * FROM meyy WHERE id= :id";
        $presql=$pdo->prepare($sql);
        $presql->bindParm(":id", $parm_id);
        $parm_id=$id;

        $presql->exeute();

        if($presql->rowCount()==1){
            $resul=$presql->fetch(PDO::FETCH_ASSOC);
            
            //var_dump($resul);

            $number=$resul["id"];
            $name=$resul["name"];
            $mobile=$resul["mobile"];
            $password=$resul["password"];

            //var_dump($resul);
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();

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
     name="name" autocomplete="off" value<?php
     echo $name;
     ?>> 
     
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
     name="mobile" >
</div>
<div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" 
     placeholder="Enter Your password" 
     name="password" >
</div>
  <button type="submit" class="btn btn-primary"name='submit'>update</button>
</form>
</div>

    
  </body>
</html>