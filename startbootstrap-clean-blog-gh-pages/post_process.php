<?php 
session_start();
require_once('asset/config.php');
require_once('asset/database.php');
require_once('asset/log_backend.php');


if(isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $post_content = mysqli_real_escape_string($conn,htmlspecialchars($_POST['post']));
    if($username && $post_content){
  	$sql = "INSERT INTO post (username, post, date)
	VALUES ('$username', '$post_content', now());";

    $result = $connection->query($sql);
    if($result){
    	$func->redirect('yourpostlist.php');
    }else{
    	echo "something is wrong";
    }
	

        
    }else{
        echo "enter username and password";
    }

}else{
    echo "SORRY";
}

?>