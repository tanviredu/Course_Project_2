<?php 
    // make as minimum as posssible
    require_once('config.php');
    class MySQLDatabase{
        private $connection;
        function __construect(){
            $this->connection();
        }
        public function connection(){
            $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        }
        public function close_connection(){
            if(isset($this->connection)){
                mysqli_close($this->connection);
                unset($this->connection);
            }
        }
        public function query($sql){
            // make the connection again
            $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            
            $result = mysqli_query($this->connection,$sql);
            return $result;
        }
        public function confirm_query($result){
            if(!$result){
                return false;
            }else{
              return true;  
            }
        }
        public function fetch_array($result_set){
            return mysqli_fetch_array($result_set);
        }
		// thats a testing function it will not used in production
		public function get_all_info($data){
            try{
                $data=mysqli_fetch_all($data);
                
                foreach($data as $value){
                    echo $value[0];
                    }
                }catch(Exception $e){
                    echo "ERROR";
                }
            
        }
    }
    $connection = new MySQLDatabase;
    //$connection->close_connection();
    //$data=$connection->query("SELECT * FROM user");
    //$connection->get_all_info($data);
?>