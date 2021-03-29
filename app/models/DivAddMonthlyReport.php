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
        public function setDetails(){
            $this->div_id=$this->clearInputs($_SESSION['office_id']);
            $this->project_id=$this->clearInputs($_POST['project_id']);
            $this->report_no=$this->clearInputs($_POST['report_no']);
            $this->from_date=$this->clearInputs($_POST['start_date']);
            $this->to_date=$this->clearInputs($_POST['end_date']);
            $this->project_status=$this->clearInputs($_POST['status']);;
            $this->view_status='not-viewd';
            $this->approval_status='pending';
            
        }
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        
        public function insertData(){
            $query="INSERT INTO `monthly_report`(`project_id`, `report_no`, `from_date`, `to_date`, `view_status`, `approval_status`, `project_status`) VALUES ('$this->project_id','$this->report_no','$this->from_date','$this->to_date','$this->view_status','$this->approval_status','$this->project_status')";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0)
                return true;
            return false;
        }

        public function insertFileNames($file_name,$type){
            $query="INSERT INTO `monthly_report_docs`(`project_id`, `report_no`, `document_name` , `type`) VALUES ('$this->project_id','$this->report_no','$file_name','$type')";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            return false;
            }
        }

        public function  getProjects($div_id){
            $result_arr=[];
            $query="SELECT project_id,project_name FROM project WHERE project_status='ongoing' && div_id='$div_id'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    array_push($result_arr,$row);
                }
                return $result_arr;
            }
            return $result_arr;
        }

    }
?>