<?php
    class Database{
        private $dbhost='localhost';
        private $username='root';
        private $password='';
        private $dbname='mis_db';
        private $connection=null;
        public function __construct(){
            $this->dbConnect();
        }
        
        private function dbConnect(){
            $this->connection=new mysqli($this->dbhost,$this->username,$this->password,$this->dbname);
            if($this->connection->connect_error){
                die("Connection to the database failed ".$this->connection->connect_error);
            }
             //echo "Database connected sucessfully!";
        }
        public function getConnection(){
            return $this->connection;
        }
    }
?>