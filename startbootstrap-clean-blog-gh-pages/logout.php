<?php 
    require_once('asset/config.php');
    session_destroy();
    $func->redirect('login.php');
?>