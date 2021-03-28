<?php
    //MODEL
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    //About Us Page Shown To The Public
    class AdminAboutUS{

        
        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        //connect to the database
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        //Get the Content from the database
        public function getNewContent(){
            $query="SELECT * FROM `about_us`";
            $result=$this->connection->query($query);   
            return $result;
        }

    }
?>