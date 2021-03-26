<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ViewProjectProposal{
        private $connection;

        public function __construct(){
            $this->conncetion=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData($report_id){
            $result_arr=[];
            $query="SELECT p.project_name,m. * FROM projects as p INNER JOIN monthly_report as m on p.project_id=m.project_id WHERE m.report_no='$report_id'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $result_arr=[$row['project_name'],$row['report_no'],$row['project_id'],$row['from_date'],$row['to_date'],$row['view_status'],$row['approval_status'],$row['project_status']];
                }
                return $result_arr;
            }
            return $result_arr;
        }

        public function approveReport($report_id){
            $query="UPDATE monthly_report SET approval_status='approved' WHERE report_no='$report_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function rejectProposal($report_id){
            $query="UPDATE monthly_report SET approval_status='rejected' WHERE report_no='$report_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

    }


?>