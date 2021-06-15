<?php

include "autoload.php";

$user = new User;

if(isset($_GET['delete_id'])){
$id=$_GET['delete_id'];

$user ->user_delete($id);

header("location:index.php");


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>oop</title>
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
 * isseting form
 */
if(isset($_POST['add'])){

//get values

 $name  = $_POST['name'];
 $email = $_POST['email'];
 $cell = $_POST['cell'];
 $username = $_POST['username'];


$user-> userset( $name, $email, $cell, $username);


}





?>




<div class="wrap-table ">
	<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_user_modal">Add new student</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
     
	 
	 <?php
	 
	 
	 $data= $user ->allusershow();

	 $i=1;
	 
	 while($alldata=$data->fetch_object()):
	 
	 ?>
		 			
						<tr>
							<td><?php echo  $i; $i++; ?></td>
							<td><?php echo $alldata->name ?></td>
							<td><?php echo $alldata->email ?></td>
							<td><?php echo $alldata->cell ?></td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="singleuser.php?singleuser_id=<?php echo $alldata->id?>">View</a>
								<a class="btn btn-sm btn-warning" href="edituser.php?edituser_id=<?php echo $alldata->id?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $alldata->id?>">Delete</a>
							</td>
						</tr>
								
		<?php endwhile;?>

					
						

					</tbody>
				</table>
			</div>
		</div>
	</div>




<div id="add_user_modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		 
			<div class="modal-body">
			
				<h2>Add new user</h2>
		

				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input name="email"  class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
					</div>

					<div class="form-group">
						
						<input name="add" type="submit" value="Add" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- JS FILES  -->


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