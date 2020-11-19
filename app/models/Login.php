<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class Login{
        private $userID;
        private $password;
        private $office_id;
        private $username;
        private $userType;

        public function setLoginDetails(){
            $this->userID=htmlspecialchars(trim($_POST['userID']));
            $this->password=htmlspecialchars(trim($_POST['password']));
        }

        public function checkUserID(){
            $database=new \Database();
            $connection=$database->getConnection();
            $userType=substr($this->userID,0,3);
            $this->userType=$userType;

            if($userType=='adm'){
                $result=$this->checkForAdmin($connection);
            }
            else if($userType=='div'){
                $result=$this->checkForDivUsers($connection);
                
            }
            else if($userType=='dis'){
                $result=$this->checkForDisUsers($connection);
            }
            else if($userType=='con'){
                $result=$this->checkForContractors($connection);
            }
            else{
                $result;
            }

            return $result;
            
        }
        public function checkPassword($result){
            $user=$result->fetch_assoc();
            if(password_verify($this->password,$user['password'])){
                $this->setUserAttributes($user);
                return true;
            }
            else
                return false;
        }
        public function setUserAttributes($user){
            $this->username=$user['user_name'];
            $this->office_id=isset($user['div_id']) ? $user['div_id'] : '';
        }
        private function checkForAdmin($connection){
            $query="SELECT `user_name`,`password` FROM admin WHERE user_id='div0309'";
            $result=$connection->query($query);
            return $result;
            
        }
        private function checkForDivUsers($connection){
            $query="SELECT `user_name`,`div_id`,`password` FROM div_user WHERE `user_id`='{$this->userID}'";
            $result=$connection->query($query);
            return $result;
            
        }
        private function checkForDisUsers($connection){
            $query="SELECT `user_name`,`password` FROM dis_user WHERE `user_id`='{$this->userID}'";
            $result=$connection->query($query);
            return $result;
        }
        private function checkForContractors($conncetion){
            $query="SELECT `user_name`,`password` FROM contractor WHERE `user_id`='{$this->userID}'";
            $result=$connection->query($query);
            return $result;
        }

        public function getuserID(){
            return $this->userID;
        }
        public function getUserName(){
            return $this->username;
        }
        public function getOfficeID(){
            return $this->office_id;
        }
        public function getUserType(){
            return $this->userType;
        }
        
    }
?>