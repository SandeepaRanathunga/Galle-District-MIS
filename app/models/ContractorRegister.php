<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ContractorRegister{
        private $user_id;
        private $name;
        private $office_id;
        private $reg_no;
        private $specialized_field;
        private $nic;
        private $office_address;
        private $contact_no;
        private $email;
        private $password;
        private $hashed_password;
        private $confirm_password;
        private $connection;
        
        public function __construct(){
            $this->connection=$this->dbConnect(); 
        }

        //set the data received from input fields
        public function setDetails(){
            $this->user_id=$this->clearInputs($_POST['user_id']);
            $this->name=$this->clearInputs($_POST['name']);
            $this->office_id=$this->clearInputs($_POST['office_id']);
            $this->reg_no=$this->clearInputs($_POST['reg_no']);
            $this->specialized_field=$this->clearInputs($_POST['specialized_field']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->office_address=$this->clearInputs($_POST['office_address']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->password=$this->clearInputs($_POST['password']);
            $this->confirm_password=$this->clearInputs($_POST['confirm_password']);

            $this->hashed_password=password_hash($this->password,PASSWORD_DEFAULT);
            
        }

        //to validate input data
        public function validateData(){
            if(substr($this->user_id,0,5)!=$this->office_id){
                return false;
            }
            if($this->password!=$this->confirm_password){
                return false;
            }
            return true;   
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
        //finally insert the data to the database
        public function insertUserDetails(){
            if($this->office_id=='dis00'){
                $query="INSERT INTO dis_user (user_id,user_name,designation,nic,contact_no,email,password) VALUES ('$this->user_id','$this->name','$this->designation','$this->nic','$this->contact_no','$this->email','$this->hashed_password')";
                $result=$this->connection->query($query);
                return $result;
            }
            else{
                $query="INSERT INTO div_user (user_id,user_name,div_id,designation,nic,contact_no,email,password) VALUES ('$this->user_id','$this->name','$this->office_id','$this->designation','$this->nic','$this->contact_no','$this->email','$this->hashed_password')";
                $result=$this->connection->query($query);
                return $result;
            }   
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