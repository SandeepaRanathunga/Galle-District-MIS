<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DivAddMonthlyReport{
        private $connection;
        private $project_id;
        private $report_no;
        private $from_date;
        private $to_date;
        private $view_status;
        private $approval_status;
        private $project_status;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setDetails($div_id,$report_no){
            $this->div_id=$div_id;
            $this->project_id=$project_id;
            $this->report_no=$report_no;
            $this->from_date=$from_date;
            $this->to_date=$to_date;
            $this->view_status='not-viewd';
            $this->approval_status='pending';
            $this->project_status='ongoing';
        }
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        
        public function insertData(){
            $query="INSERT INTO monthly_report (project_id,report_no,from_date,to_date,view_status,approval_status,project_status) VALUES ('$this->div_id','$this->description','$this->file_name','$this->view_status','$this->approval_status')";
            $result=$this->connection->query($query);
            return $result;
            
        }

    }
?>