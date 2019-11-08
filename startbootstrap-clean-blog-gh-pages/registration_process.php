<?php   
  
  require_once('asset/config.php');
  require_once('asset/database.php');
  require_once('asset/reg_backend.php');
  // take the input
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['password1'];
  // validate the email first



// -----------

    if($reg->filter_email($email)){
        // now find if the user is existed
            
            $result=$reg->get_user_by_username_and_pass($username,$password);
            
            // one mobile one connection
            $data = mysqli_num_rows($result);
            //echo $data;
            if(!$data){
                // add the user here
                
                $reg->make_registration($username,$email,$password);
                //echo "Registration complete";
                //echo "Welcome ".$username;
                $func->redirect('login.php');
            }else{
                echo "User is already exists";
            }

        }
else{
        echo "Invalid Email";
    }
  ?>