<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class AddProjectProposal{

        private $connection;
        private $div_id;
        private $description;
        private $file_name;
        private $view_status;
        private $approval_status;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setDetails($div_id,$file_name){
            $this->div_id=$div_id;
            $this->description=$this->clearInputs($_POST['description']);
            $this->file_name=$file_name;
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
            $query="INSERT INTO project_proposal (div_id,description,file_name,view_status,approval_status) VALUES ('$this->div_id','$this->description','$this->file_name','$this->view_status','$this->approval_status')";
            $result=$this->connection->query($query);
            return $result;
            
        }

    }
?>