<?php 
session_start();

if(isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $post = $_POST['post'];
    if($username && $post){
        header('yourpostlist.php');
    }else{
        echo "enter username and password";
    }

}else{
    echo "SORRY";
}

?>