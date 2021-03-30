<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class AddBidReport{

        private $connection;
        private $contractor_id;
        private $bid_report_id;
        #private $bid_report_document;
        private $bid_report_name;
        private $div_id;
        private $view_status;
        private $approval_status;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setDetails($contractor_id,$bid_report_name){
            $this->contractor_id=$contractor_id;
            $this->bid_report_id=$bid_report_id;
            $this->bid_report_name=$bid_report_name;
            $this->div_id=$div_id;
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
            $query="INSERT INTO bid_report (contractor_id,bid_report_id,bid_report_name,div_id,view_status,approval_status) VALUES ('$this->contractor_id','$this->bid_report_id','$this->bid_report_name','$this->div_id','$this->view_status','$this->approval_status')";
            $result=$this->connection->query($query);
            return $result;
            
        }

    }

?>