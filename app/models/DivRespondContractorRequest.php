<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DivRespondContractorRequest{
        private $user_id;
        private $name;
        private $reg_no;
        private $specialized_field;
        private $office_address;
        private $div_id;
        private $contact_no;
        private $email;
        private $hashed_password;
        private $connection;
        private $login_permission=1;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function setDetails(){
            $this->user_id=$this->clearInputs($_POST['user_id']);
            $this->name=$this->clearInputs($_POST['name']);
            $this->reg_no=$this->clearInputs($_POST['reg_no']);
            $this->specialized_field=$this->clearInputs($_POST['specialized_field']);
            $this->office_address=$this->clearInputs($_POST['office_address']);
            $this->div_id=$this->clearInputs($_POST['div_id']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->hashed_password=password_hash($this->generateRandomPassword(8),PASSWORD_DEFAULT); 
        }

        public function validateData(){
            if(in_array($this->email,$this->getEmails())){
                return false;
            }
            return true;   
        }

        public function insertUserDetails(){
            $query="INSERT INTO account (user_id,email,password,user_type,login_permission) VALUES ('$this->user_id','$this->email','$this->hashed_password','$this->user_type','$this->login_permission')";
            $result=$this->connection->query($query);
            if($result){
                $query="INSERT INTO contractor (user_id,name,reg_no,specialized_field,office_address,div_id,contact_no,) VALUES ('$this->user_id',$this->name','$this->reg_no','$this->specialized_field','$this->office_adddress','$this->div_id','$this->contact_no')";
                $result=$this->connection->query($query);
                return $result;
            }
        }  

        public function getData($id){
            $result_arr=[];
            $query="SELECT * FROM contractor_request WHERE id='$id'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $result_arr=[$row['id'],$row['view_status'],$row['approval_status'],$row['name'],$row['reg_no'],$row['specialized_field'],$row['office_address'],$row['contact_no'],$row['email'],$row['requested_date'],$row['div_id'],$row['document']];
                }
                return $result_arr;
            }
            return $result_arr;
        }


        public function rejectRequest($id){
            $query="DELETE FROM contractor_request WHERE id='$id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function updateViewStatus($id){
            $query="UPDATE contractor_request SET view_status='viewed' WHERE id='$id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

    }

?>