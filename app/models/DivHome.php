<?php
     namespace model;
     require_once __DIR__ . '/../database/Database.php';

     class DivHome{
        private $connection;

        public function __consturct(){
            $this->connection = $this->dbConnect();
        }

        private function dbConnect(){
            $database = new \Database();
            return $database->getConnection();
        }


        
     }
?>