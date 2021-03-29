<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ViewProjectProposal{

        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData($proposal_id){
            $result_arr=[];
            $query="SELECT d.div_name,p.* FROM division as d INNER JOIN project_proposal as p ON d.div_id=p.div_id WHERE p.proposal_id='$proposal_id'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $result_arr=[$row['div_name'],$row['proposal_id'],$row['div_id'],$row['description'],$row['file_name'],$row['view_status'],$row['approval_status'],$row['submited_date']];
                }
                return $result_arr;
            }
            return $result_arr;

        }

        public function approveProposal($proposal_id){
            $query="UPDATE project_proposal SET approval_status='approved' WHERE proposal_id='$proposal_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function rejectProposal($proposal_id){
            $query="UPDATE project_proposal SET approval_status='rejected' WHERE proposal_id='$proposal_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function updateViewStatus($proposal_id){
            $query="UPDATE project_proposal SET view_status='viewed' WHERE proposal_id='$proposal_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

    }
?>