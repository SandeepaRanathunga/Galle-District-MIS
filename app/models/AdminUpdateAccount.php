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


    }
?>