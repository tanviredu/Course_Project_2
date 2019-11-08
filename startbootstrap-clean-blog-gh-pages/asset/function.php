
<?php  
    // function goes here
    class functions{
        public function redirect($url){
            return header("Location: $url");
        }


        public function delete_post($id){}
    }
    $func = new functions;
    // testing
    //$func->redirect("http://www.google.com");
?>