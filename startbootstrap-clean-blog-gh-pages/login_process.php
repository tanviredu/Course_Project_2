<?php
  session_start();
  require_once('asset/config.php');
  require_once('asset/database.php');
  require_once('asset/log_backend.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  
      // if it is validated then check the database
     $result=$connection->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
     
     $data = mysqli_num_rows($result);
     if(!$data){
       echo "You are not user";
     }else{
       $_SESSION['username'] = $username;
       $func->redirect('index.php');
     }    

  
?>