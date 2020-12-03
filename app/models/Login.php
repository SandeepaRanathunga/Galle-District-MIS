<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class Login{
        private $userID;
        private $password;
        private $office_id;
        private $username;
        private $userType;
        private $connection;

        public function __construct(){
            $database=new \Database();
            $this->connection=$database->getConnection();
        }

        public function setLoginDetails(){
            $this->userID=htmlspecialchars(trim($_POST['userID']));
            $this->password=htmlspecialchars(trim($_POST['password']));
        }
        public function checkUser(){
            $query="SELECT * FROM account WHERE user_id='$this->userID'";
            $result=$this->connection->query($query);
            return $result;   
        }
        public function checkPassword($result){
            $user=$result->fetch_assoc();
            if(password_verify($this->password,$user['password'])){
                $this->userType=$user['user_type'];
                $this->office_id=substr('div0123',0,5);
                
                return true;
            }
            else
                return false;
        }
        

        public function getuserID(){
            return $this->userID;
        }
        public function getUserName($type){
            $query="SELECT name FROM $type WHERE user_id='$this->userID'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                $name_arr=$result->fetch_assoc();
                return $name_arr['name'];
            }
            else
                return "User";
        }
        public function getOfficeID(){
            return $this->office_id;
        }
        public function getUserType(){
            return $this->userType;
        }
        
    }
?>