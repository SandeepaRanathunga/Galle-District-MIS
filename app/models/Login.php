<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class Login{
        private $username;
        private $password;

        public function setLoginDetails(){
            $this->username=$_POST['username'];
            $this->password=$_POST['password'];
        }

        public function checkLoginDetails(){
            $database=new Database();
            $query="SELECT password FROM users WHERE username='{$this->username}'";
            $result=$database->query($query);
            $result_arr=$result->fetch_assoc();

            if($result && password_verify($this->password,$result_arr['password']))
                return true;
            return false;
        }

        public function getUsername(){
            return $this->username;
        }
    }
?>