<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    
    class Signup{
        private $user_id;
        private $user_type;
        private $name;
        private $office_id;
        private $designation;
        private $nic;
        private $contact_no;
        private $email;
        private $hashed_password;
        private $connection;
        private $login_permission=1;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        //set the data received from input fields
        public function setDetails(){
            $this->user_id=$this->clearInputs($_POST['user_id']);
            $this->user_type=$this->clearInputs(substr($_POST['user_id'],0,3));
            $this->name=$this->clearInputs($_POST['name']);
            $this->office_id=$this->clearInputs($_POST['office_id']);
            $this->designation=$this->clearInputs($_POST['designation']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->hashed_password=password_hash($this->generateRandomPassword(8),PASSWORD_DEFAULT);
            
        }
        //to validate input data
        public function validateData(){
            if(substr($this->user_id,0,5)!=$this->office_id){
                return false;
            }
            if(in_array($this->email,$this->getEmails())){
                return false;
            }
            return true;   
        }
        private function generateRandomPassword($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        //to clear input data
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        //connect to the database
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        //get divisons list to the form
        public function getDivisions(){
            $result_arr=[];
            $query="SELECT * FROM division";
            $result=$this->connection->query($query);
            while($row=$result->fetch_assoc()){
                array_push($result_arr,[$row['div_id'],$row['div_name']]);
            }
            return $result_arr;
        }
        public function getEmails(){
            $emails=[];
            $query="SELECT email from account";
            $result=$this->connection->query($query);
            while($row=$result->fetch_assoc()){
                array_push($emails,$row['email']);
            }
            return $emails;
        }
        //finally insert the data to the database
        public function insertUserDetails(){
            $query="INSERT INTO account (user_id,email,password,user_type,login_permission) VALUES ('$this->user_id','$this->email','$this->hashed_password','$this->user_type','$this->login_permission')";
            $result=$this->connection->query($query);
            if($result){
                if($this->user_type=='div'){
                    $query="INSERT INTO div_user (user_id,div_id,name,contact_no,designation,nic) VALUES ('$this->user_id','$this->office_id','$this->name','$this->contact_no','$this->designation','$this->nic')";
                    $result=$this->connection->query($query);
                    return $result;
                }
                else{
                    $query="INSERT INTO dis_user (user_id,name,contact_no,designation,nic) VALUES ('$this->user_id','$this->name','$this->contact_no','$this->designation','$this->nic')";
                    $result=$this->connection->query($query);
                    return $result;
                }
            }
            else
                return $result;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getUserID(){
            return $this->user_id;
        }
        public function getName(){
            return $this->name;
        }


    }
?>