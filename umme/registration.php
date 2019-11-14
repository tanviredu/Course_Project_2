
<!doctype html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
*{margin:0px; padding: 0px;}

#main{width:200px; margin:24px auto;  }
</style>

</head>

<body>
	<?php include('nav.php');?>;
	<?php
require_once("connection.php");
if (isset($_POST['register'])) {
	     $first_name = $_POST['first_name'];
	     $last_name = $_POST['last_name'];
	     $user_name = $_POST['user_name'];
	     $password =$_POST['password'];


	     if($first_name!="" && $last_name!="" && $user_name!="" && $password!=""){

	     	$sql = "INSERT INTO user(first_name,last_name,user_name,password) VALUES ('$first_name','$last_name','$user_name','$password');";
	     
	     	//echo $sql;

	     $result = mysqli_query($con,$sql);
	     if($result){
	     	
	     	header('Location: login.php ');
	     }else{
	     	header('Location: registration.php ');
	     }
	    }else{
	    	echo "<script>alert('fill all the field');</script>";
	    }


	     
	     
	 }
?>
<center>
<div id="main">
		<div class="card" style="width: 18rem;">
		<div class="card-body">
    		<h5 class="card-title">Registration</h5>

<form method="post">

First Name:<br>
<input type="text" name="first_name" placeholder="First Name" />
<br><br>
Last Name:<br>
<input type="text" name="last_name" placeholder="last_name" />
<br><br>
User Name:<br>
<input type="text" name="user_name" placeholder="user_name" /><br><br>
Password:<br>
<input type="password" name="password" placeholder="password" /><br><br>

<input type="submit" class="btn btn-danger" name="register" value="Register" />

	</form>

	</div>
</div>
</div>
	</center>

</body>

</html>