<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisViewMonthlyReportList{
        private $connection;

        public function __construct(){
            $this->conncetion=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData(){
            $result_arr=[];
            $query="SELECT p.project_name,m.report_no,p.project_id,m.from_date,m.to_date,m.view_status,m.approval_status,p.project_status * FROM projects as p INNER JOIN monthly_report as m on p.project_id=m.project_id ORDER BY m.report_id";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    array_push($result_arr,[$row['project_name'],$row['report_no'],$row['project_id'],$row['from_date'],$row['to_date'],$row['view_status'],$row['approval_status'],$row['project_status']]);
                }
                return $result_arr;
            }
            return $result_arr;
        }
    }
?>