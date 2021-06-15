<?php
include "autoload.php";


$single_user = new User;

if(isset($_GET['singleuser_id'])){
   $id = $_GET['singleuser_id'];

   $single_user ->singleshow($id);
  
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
$data= $single_user->singleshow($id);
while($single_data = $data->fetch_object()):
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto mt-5">
                <div class="card">
                    <h2 class="text-center"><?php echo $single_data->name?></h2>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Name :</td>
                                <td><?php echo  $single_data->name?></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><?php echo $single_data->email?></td>
                            </tr>
                            <tr>
                                <td>Cell :</td>
                                <td><?php echo $single_data->cell?></td>
                            </tr>
                            <tr>
                                <td>Username : </td>
                                <td><?php echo $single_data->username?></td>
                            </tr>
                            
                        </table>

                        <a class="btn btn-sm btn-primary" href="index.php">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;?>

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






