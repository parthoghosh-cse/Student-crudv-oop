<?php
include "autoload.php";

$edit_user = new User;

$update_user = new User;

/**
 * data collect to database 
 */

if(isset($_GET['edituser_id'])){
	$id = $_GET['edituser_id'];

	$edit_user ->  edit_data($id);
}

/**
 * value get
 */
if(isset($_POST['update'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cell=$_POST['cell'];
	$username=$_POST['username'];

	$update_user-> update_user($name,$email,$cell,$username);

}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edituser</title>
<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>
<?php

/**
 * data collect to database 
 */
$data=$edit_user->edit_data($id);
while($edit_data=$data->fetch_object()):


?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 mx-auto mt-5">
		<a class="btn btn-sm btn-primary" href="index.php">Back</a>
		<br>
		<br>
			<div class="card">
			<br>
		
			<h2>Edit user</h2>
				<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input  name="name" class="form-control" value="<?php echo $edit_data->name ;?>" type="text">
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input  name="email"  class="form-control" value="<?php echo $edit_data->email ;?>" type="text">
					</div>

					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $edit_data->cell ;?> " type="text">
					</div>

					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" value="<?php echo $edit_data->username ;?> " type="text">
					</div>

					<div class="form-group">
						
						<input name="update" type="submit" value="update" class="btn btn-primary">
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile;?>





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

	


</script>

</body>
</html>