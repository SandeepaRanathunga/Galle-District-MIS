<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    
    class Signup{
        private $user_id;
        private $name;
        private $office_id;
        private $designation;
        private $nic;
        private $contact_no;
        private $email;
        private $password;
        private $confirm_password;

        private function setDetails(){
            $this->user_id=$_POST['user_id'];
            $this->name=$_POST['name'];
            $this->office_id=$_POST['office_id'];
            $this->designation=$_POST['designation'];
            $this->nic=$_POST['nic'];
            $this->contact_no=$_POST['contact_no'];
            $this->email=$_POST['email'];
            $this->password=$_POST['password'];
            $this->confirm_password=$_POST['confirm_password'];
            
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function getDivisions(){
            $result_arr=[];
            $connection=$this->dbConnect();
            $query="SELECT * FROM division";
            $result=$connection->query($query);
            while($row=$result->fetch_assoc()){
                array_push($result_arr,[$row['div_id'],$row['div_name']]);
            }
            return $result_arr;
        }


    }
?>