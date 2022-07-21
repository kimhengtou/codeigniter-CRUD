<?php
include('../../includes/session.php');
include('../../includes/constants.php');
include('../../includes/header.php');
include('../../includes/connection.php');
$link = connect();
$id = $_GET['id'];
$result = execute($link,"SELECT * FROM categories WHERE id = ".$id);
$row = fetch($result);
?>
<h1>Edit Category</h1>
<form action="<?php echo $base_url;?>/modules/categories/update_category.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
	Category Name <input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
	<input type="submit" value="Save">
</form>

<?php include('../../includes/footer.php');?>