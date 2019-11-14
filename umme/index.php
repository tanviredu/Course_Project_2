<!doctype html>
<html>
<body>
<?php 
session_start();

if (isset($_SESSION['user_name'])){

echo 'Welcome '.$_SESSION['user_name'];
echo '<a href="logout.php">Log out</a><br>';
}else{
	header("location:login.php");
}

?>
</body>
</htm>