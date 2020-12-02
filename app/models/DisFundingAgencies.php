<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisFundingAgencies{
        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        //get agencies list to the form
        public function getAgencies(){
            $result_arr=[];
            $query="SELECT * FROM funding_agency";
            $result=$this->connection->query($query);
            while($row=$result->fetch_assoc()){
                array_push($result_arr,[$row['agency_id'],$row['agency_name']]);
            }
            return $result_arr;
        }
    }
?>