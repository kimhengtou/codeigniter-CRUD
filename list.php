<!doctype html>
<html lang="en">
  <head>
    <title> meyy Application - Create user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
        <div class="navbar navbar-dark bg-dark">
        <div class="container my-5">
            <a href="#" class="navbar-brand">CRUD Application</a>
</div>
</div>
<div class="container" style="padding-top: 10px;">
<h3>View User</h3>
<hr>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>password</th>
                    <th>Operations</th>
                
</tr>
<?php if(!empty($user))  { foreach($user as $user) {?>
<tr>
    <td><?php echo $user['user-id']?></td>
    <td><?php echo $user['name']?></td>
    <td><?php echo $user['email']?></td>
    <td><?php echo $user['mobile']?></td>
    <td><?php echo $user['password']?></td>
    <td>
        <a href="<?php echo base_url().'display.php/user/update/'.$user['user_id']?>" class="btn btn-primary">
        update</a>
</td>
<td>
        <a href="<?php echo base_url().'display.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">
        delete</a>
</td>


</tr>
<?php } } else{ ?>
    <tr>
<td colspan="5">Records not found</td>
    </tr>
    <?php } ?>

</table>
</div>
</div>
</div>

  </body>
</html>