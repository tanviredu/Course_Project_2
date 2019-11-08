<?php 
    require_once('config.php');
    require_once('database.php');
    require_once('function.php');
    class Login{
        //this is for mobile validation
        public function validate_mobile($mobile){
            return preg_match('/^[0-9]{11}+$/', $mobile);
        }
        public function get_user_by_username_and_pass($username,$password){
            global $connection;
            $res=$connection->query("SELECT username from user WHERE password='$password';");
            //$connection->get_all_info($res);
        }
    }
    $log = new Login;
    //$log->get_user_by_mobile_and_pass('1234','1234');
    
?>