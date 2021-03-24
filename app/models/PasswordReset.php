<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class PasswordReset{
        private $email;
        private $connection;
        private $token;
        private $password;
        private $confirm_password;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function tokenExist($token){
            $query="SELECT email FROM reset WHERE token='$token'";
            $result=$this->connection->query($query);
            return $result;
        }
        public function setPassword(){
            $this->password=$_POST['password'];
            $this->confirm_password=$_POST['confirm_password'];
        }
        public function matchPassword(){
            if($this->password===$this->confirm_password)
                return true;
            return false;
        }
        public function resetPassword($email){
            $password=password_hash($this->password,PASSWORD_DEFAULT);
            $query="UPDATE account SET password='$password' WHERE email='$email'";
            $result=$this->connection->query($query);
            return $result;
        }
        public function deleteToken($email){
            $query="DELETE from reset WHERE email='$email'";
            $result=$this->connection->query($query);
            return $result;
        }
        
        public function getConnection(){
            return $this->connection;
        }
        public function getEmail(){
            return $this->email;
        }
    } 
?>