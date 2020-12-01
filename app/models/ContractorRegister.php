<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ContractorRegister{
        private $user_id;
        private $name;
        private $reg_no;
        private $specialized_field;
        private $nic;
        private $office_address;
        private $contact_no;
        private $email;
        private $password;
        private $hashed_password;
        private $confirm_password;
        private $approval_status;
        private $view_status;
        private $user_type;
        private $connection;
        
        public function __construct(){
            $this->connection=$this->dbConnect(); 
        }

        //set the data received from input fields
        public function setDetails(){
            $this->user_id="con".rand(1000,10000);
            $this->name=$this->clearInputs($_POST['name']);
            $this->reg_no=$this->clearInputs($_POST['reg_no']);
            $this->specialized_field=$this->clearInputs($_POST['specialized_field']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->office_address=$this->clearInputs($_POST['office_address']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->password=$this->clearInputs($_POST['password']);
            $this->confirm_password=$this->clearInputs($_POST['confirm_password']);
            $this->approval_status=0;
            $this->view_status=0;
            $this->user_type='con';

            $this->hashed_password=password_hash($this->password,PASSWORD_DEFAULT);
            
        }

        //to validate input data
        public function validateData(){
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

        //finally insert the data to the database
        public function insertUserDetails(){
            $query="INSERT INTO account (user_id, email, password, user_type) VALUES ('$this->user_id','$this->email','$this->hashed_password','$this->user_type')";
            $result=$this->connection->query($query);
            //return $result;
            if($result){
                $query="INSERT INTO contractor (user_id, name, reg_no, specialized_field, nic, office_address, contact_no, approval_status, view_status) VALUES 
                ('$this->user_id','$this->name','$this->reg_no','$this->specialized_field','$this->nic','$this->office_address','$this->contact_no','$this->approval_status','$this->view_status')";
                $result=$this->connection->query($query);
                return $result;
            }else{
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