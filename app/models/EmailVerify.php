<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class EmailVerify{
        private $email;
        private $connection;
        private $token;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setEmail(){
            $this->email=htmlspecialchars(trim($_POST['email']));
        }
        public function checkEmail(){
            $query="SELECT user_id FROM account WHERE email='$this->email'";
            $result=$this->connection->query($query);
            return $result;

        }
        public function insertToken(){
            $this->token=uniqid(md5(time()));
            $query="SELECT email FROM reset WHERE email='$this->email'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                $query="UPDATE reset SET token='$this->token' WHERE email='$this->email'";
                $result=$this->connection->query($query);
            }
            else{
                $query="INSERT INTO reset (email,token) VALUES ('$this->email','$this->token')";
                $result=$this->connection->query($query);
            }
            
            return $result;
        }
        public function getToken(){
            return $this->token;
        }
        public function getEmail(){
            return $this->email;
        }
    } 
?>