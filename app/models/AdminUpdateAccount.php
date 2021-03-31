<?php
    namespace model;
    require_once  __DIR__ . '/../database/Database.php';

    class AdminUpdateAccount{

        private $connection;
        private $user_id;
        private $office_id;
        private $name;
        private $office;
        private $designation;
        private $nic;
        private $user_type;
        private $contact_number;
        private $email;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getDivData(){
            $result_arr=[];
            $query="SELECT account.email,div_user.user_id,div_user.div_id,div_user.name,div_user.contact_no,div_user.designation,div_user.nic FROM account JOIN div_user ON account.user_id = div_user.user_id";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                return $row;
            }
        }

        public function getDisData(){
            $result_arr=[];
            $query="SELECT account.email,dis_user.user_id,dis_user.name,dis_user.contact_no,dis_user.designation,dis_user.nic FROM account JOIN dis_user ON account.user_id = dis_user.user_id";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                return $row;
            }           
        }

        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }

        public function setDetails(){
            $this->user_id=$this->clearInputs($_POST['user_id']);
            $this->office_id=$this->clearInputs($_POST['']);
            $this->name=$this->clearInputs($_POST['name']);
            $this->office_id=$this->clearInputs($_POST['office_id']);
            $this->designation=$this->clearInputs($_POST['designation']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->user_type=$this->clearInputs(substr($_POST['user_id']),0,3);
            $this->contact_number=$this->clearInputs($_POST['contact_number']);
            $this->email=$this->clearInputs($_POST['email']);
        }

        public function updateData(){
            $result_arr=[];
            if($this->user_type=='div'){
                $query="UPDATE account JOIN div_user ON account.user_id = div_user.user_id SET account.email = '$this->email' ,div_user.user_id = '$this->user_id' ,div_user.name = '$this->name' ,div_user.contact_no ='$this->contact_no' ,div_user.designation='$this->designation' ,div_user.nic='$this->nic'";
                $result=$this->connection->query($query);
                // if($result->affected_rows>0){
                //     $row=$result->fetch_assoc();
                //     return $row;
                // } 
                return $result;
            }else{
                $query="UPDATE account JOIN dis_user ON account.user_id = dis_user.user_id SET account.email = '$this->email' ,dis_user.user_id = '$this->user_id' ,dis_user.name = '$this->name' ,dis_user.contact_no ='$this->contact_no' ,dis_user.designation='$this->designation' ,dis_user.nic='$this->nic'";
                $result=$this->connection->query($query);
                // if($result->affected_rows>0){
                //     $row=$result->fetch_assoc();
                //     return $row;
                // } 
                return $result;
            }
        }
    }
?>