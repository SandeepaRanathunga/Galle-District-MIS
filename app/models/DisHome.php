<?php
     namespace model;
     require_once __DIR__ . '/../database/Database.php';

     class DisHome{
        private $connection;

        public function __construct(){
            $this->connection = $this->dbConnect();
        }

        private function dbConnect(){
            $database = new \Database();
            return $database->getConnection();
        }

        public function getProposalNotifications(){
            $query="SELECT * FROM `project_proposal` WHERE view_status='not-viewd'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0)
                return $result->num_rows;
            return 0;
        }

        public function getReportNotifications(){
            $query="SELECT * FROM `monthly_report` WHERE view_status='not-viewd'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0)
                return $result->num_rows;
            return 0;
        }



        
     }
?>