<?php
     namespace model;
     require_once __DIR__ . '/../database/Database.php';

     class DivLaunchProject{
        private $connection;
        private $project_id;
        private $project_name;
        private $start_date;
        private $est_end_date;
        private $proposal_id;
        private $div_id;
        private $contractor_id;
        private $project_status=0;

        public function __construct(){
            $this->connection = $this->dbConnect();
        }

        private function dbConnect(){
            $database = new \Database();
            return $database->getConnection();
        }

        public function  getProposals($div_id){
            $result_arr=[];
            $query="SELECT proposal_id,description FROM project_proposal WHERE approval_status='approved' && assigned_status=0 && div_id='$div_id'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    array_push($result_arr,$row);
                }
                return $result_arr;
            }
            return $result_arr;
        }
        
        public function setData($project_id){
            $this->project_id=$this->clearInputs($project_id);
            $this->project_name=$this->clearInputs($_POST['name']);
            $this->start_date=$this->clearInputs($_POST['start_date']);
            $this->est_end_date=$this->clearInputs($_POST['end_date']);
            $this->div_id=$this->clearInputs($_SESSION['office_id']);
            $this->proposal_id=$this->clearInputs($_POST['proposal_id']);
            $this->contractor_id=$this->clearInputs($_POST['contractor_id']);
        }

        public function getLastProjectId(){
            $result_arr=null;
            $div_id=
            $query="SELECT project_id FROM project WHERE div_id='{$_SESSION['office_id']}' ORDER BY project_id DESC LIMIT 1";
            $result=$this->connection->query($query);
            if($result->num_rows > 0){
                $result_arr=$result->fetch_assoc();
                return $result_arr;
            }
            return $result_arr;
            
        }

        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }

        public function submitData(){
            $query="INSERT INTO project (project_id,project_name,start_date,est_end_date,proposal_id,div_id,contractor_id,project_status) VALUES ('$this->project_id','$this->project_name','$this->start_date','$this->est_end_date','$this->proposal_id','$this->div_id','con0003','$this->project_status')";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                $query="UPDATE project_proposal SET assigned_status=1 WHERE proposal_id='$this->proposal_id'";
                $result=$this->connection->query($query);
                if($this->connection->affected_rows > 0){
                    return true;
                }
                return false;
            }
            else{
                return false;
            }
        }

        
     }
?>