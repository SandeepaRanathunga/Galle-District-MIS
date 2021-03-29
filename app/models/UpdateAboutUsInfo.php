<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    //About Us Page Shown To The Public
    class UpdateAboutUsInfo{

        private $content; 
        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setInfo(){
            $this->content=$this->clearInputs($_POST['updateaboutus']);
            
        }
        //to display the content in the textarea 
        public function getExistingContent(){
            $result_array = [] ;
            $query="SELECT * FROM `about_us`" ;
            $result=$this->connection->query($query) ;
            if ($result->num_rows>0){
                $result_array = $result->fetch_assoc() ;
                return $result_array ;
            }
            return $result_array ;
        }

        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        
        public function updateInfo(){
            $query="UPDATE `about_us` SET `about_us_info`='$this->content' WHERE 1";
            $result=$this->connection->query($query);
            if($conenction->affected_rows > 0){
                return true;
            }
            else{
                return false;
            }
            
        }
        

    }
?>