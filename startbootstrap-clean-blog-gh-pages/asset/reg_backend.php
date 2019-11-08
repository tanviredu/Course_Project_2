<?php 
    require_once('config.php');
    require_once('database.php');
    require_once('function.php');
    class Registration{
        //this is for mobile validation
        // not gonna used in here
        public function validate_mobile($mobile){
            return preg_match('/^[0-9]{11}+$/', $mobile);
        }
        public function filter_email($email){
            // sanitaize the email
            $email =  filter_var($email,FILTER_SANITIZE_EMAIL);
            // now validate
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                return false;
            }else{
                return true;
            }
        }
        // check if the user is already registered
        public function get_user_by_username_and_pass($username,$password){
            global $connection;
            
            $res=$connection->query("SELECT username FROM user WHERE username='$username' AND password='$password'");
            
            $connection->get_all_info($res);
            return $res;
        }
        public function make_registration($username,$email,$password){
            global $connection;
            $res = $connection->query("INSERT INTO user(username,email,password) VALUES ('$username','$email','$password');");
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }
    $reg = new Registration;
    //$log->get_user_by_mobile_and_pass('1234','1234');
    
?>