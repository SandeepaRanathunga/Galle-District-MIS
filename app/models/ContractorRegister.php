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
        private $approval_status;
        private $view_status;
        private $user_type;
        private $connection;
        private $login_permission=0;
        
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
            $this->password=$this->generate_password();
            $this->hashed_password=password_hash($this->password,PASSWORD_DEFAULT);
            $this->approval_status=0;
            $this->view_status=0;
            $this->user_type='con';
            
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
        //to auto generate password
        private function generate_password(){
            $length=9;
            $add_dashes=false;
            $available_sets='luds';
            $sets = array();
            if(strpos($available_sets, 'l') !== false)
                $sets[] = 'abcdefghjkmnpqrstuvwxyz';
            if(strpos($available_sets, 'u') !== false)
                $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
            if(strpos($available_sets, 'd') !== false)
                $sets[] = '23456789';
            if(strpos($available_sets, 's') !== false)
                $sets[] = '!@#$%&*?';
        
            $all = '';
            $password = '';
            foreach($sets as $set){
                $password .= $set[array_rand(str_split($set))];
                $all .= $set;
            }
        
            $all = str_split($all);

            for($i = 0; $i < $length - count($sets); $i++)
                $password .= $all[array_rand($all)];
        
            $password = str_shuffle($password);
        
            if(!$add_dashes)
                return $password;
        
            $dash_len = floor(sqrt($length));
            $dash_str = '';
            while(strlen($password) > $dash_len){
                $dash_str .= substr($password, 0, $dash_len) . '-';
                $password = substr($password, $dash_len);
            }
            $dash_str .= $password;
            return $dash_str;
        }
        

        //connect to the database
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        //finally insert the data to the database
        public function insertUserDetails(){
            $query="INSERT INTO account (user_id, email, password, user_type,login_permission) VALUES ('$this->user_id','$this->email','$this->hashed_password','$this->user_type','$this->login_permission')";
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