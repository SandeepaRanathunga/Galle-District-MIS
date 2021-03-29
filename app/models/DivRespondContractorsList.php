<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DivRespondContractorsList{

        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData(){
            $result_arr=[];
            $query="SELECT * FROM contractor_request ORDER BY id DESC";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    array_push($result_arr,[$row['id'],$row['view_status'],$row['approval_status'],$row['name'],$row['reg_no'],$row['specialized_field'],$row['office_address'],$row['contact_no'],$row['email'],$row['requested_date']]);
                }
                return $result_arr;
            }
            return $result_arr;
        }

    }
?>