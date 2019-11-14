<!doctype html>
<html>
<style>
	*{margin:0px ; padding:0px;}
	#main{width:200px; margin: 20px auto;}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<?php include('nav.php');?>;

	<div id="main">
<?php
      session_start();
      require_once("connection.php");

 if (isset($_POST['login'])){
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password';";
	echo $sql;

	$r = mysqli_query($con, $sql);
	if(mysqli_num_rows($r) > 0){

    $_SESSION['user_name'] = $user_name;

    header('location: index.php');
     

	}else{
		echo 'Your Password and User Name Do Not Match';
	}
}

?>		
	<div class="card" style="width: 18rem;">
		<div class="card-body">
    		<h5 class="card-title">Login</h5>
		<form method="post">

			User Name:<br>
			<input type="text" name="user_name" placeholder="user name" required /><br><br>

			Password:<br>
			<input type="password" name="password" placeholder="password"  /><br><br>
			<input type="submit" class="btn btn-success" name="login" value="Login" />

			<a href="registration.php" class="card-link">Registration</a>

		</form>
	</div>
	</div>
</body>


</html>


  
    
    