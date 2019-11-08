<?php 
session_start();

if(isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $post = $_POST['post'];


    echo $username;
    echo "<hr>";
    echo $post;

}else{
    echo "SORRY";
}

?>