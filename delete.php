
<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `meyy` where id=$id";
    $reult=mysqli_query($con,$sql);   
    if($reult){
        
        //echo "return confirm('Are you sure?')";
        //echo "deleted successfull";
        header('location:display.php');

    }else{
        die(mysqli_error($con));
        
    }
}

?>



