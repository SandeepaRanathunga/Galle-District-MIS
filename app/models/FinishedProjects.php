<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class FinishedProjects{
        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }

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
    }
?>