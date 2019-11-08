
<?php  
    // function goes here
    class functions{
        public function redirect($url){
            return header("Location: $url");
        }
    }
    $func = new functions;
    // testing
    //$func->redirect("http://www.google.com");
?>