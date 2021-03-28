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
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        
        public function updateInfo(){
            $query="INSERT INTO about_us(about_us_info) VALUES('$this->content')";
            $result=$this->connection->query($query);
            return $result;
            
        }
        

    }
?>