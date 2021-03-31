<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisViewMonthlyReport{
        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData($report_id){
            $result_arr=[];
            $query="SELECT p.project_name,m.report_no,p.project_id,m.from_date,m.to_date,m.view_status,m.approval_status,p.project_status,m.file_name,d.div_name,m.submited_date FROM project as p INNER JOIN monthly_report as m on p.project_id=m.project_id INNER JOIN division as d on p.div_id=d.div_id WHERE m.report_no='$report_id'";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $result_arr=[$row['project_name'],$row['report_no'],$row['project_id'],$row['from_date'],$row['to_date'],$row['view_status'],$row['approval_status'],$row['project_status'],$row['file_name'],$row['div_name'],$row['submited_date']];
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

        public function rejectReport($report_id){
            $query="UPDATE monthly_report SET approval_status='rejected' WHERE report_no='$report_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function updateViewStatus($report_id){
            $query="UPDATE monthly_report SET view_status='viewed' WHERE report_id='$report_id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }
    }
?>