<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ViewProposal{

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
            $query="SELECT d.div_name,p.* FROM division as d INNER JOIN project_proposal as p ON d.div_id=p.div_id";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    array_push($result_arr,[$row['div_name'],$row['proposal_id'],$row['div_id'],$row['description'],$row['file_name'],$row['view_status'],$row['approval_status'],$row['submited_date']]);
                }
                return $result_arr;
            }
            return $result_arr;

        }

    }
?>