
<?php  
    require_once('database.php');

    // function goes here
    class functions{
        public function redirect($url){
            return header("Location: $url");
        }



        public function delete_post($id){
            global $connection;
            $sql = "DELETE FROM post WHERE id={$id}";
            $result = $connection->query($sql);

        }
    }
    $func = new functions;
    // testing
    //$func->redirect("http://www.google.com");
?>