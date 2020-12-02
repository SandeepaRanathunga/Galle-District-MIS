<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisManageFunds{
        private $connection;

        public function __construct(){
            $this->connection = $this->dbConnect();
        }

        private function dbConnect(){
            $database = new \Database();
            return $database->getConnection();
        }
/*
        public function getAgencyByID($agency_id){
            $query = "SELECT * FROM funds WHERE agency_id = ?";
            $paramType = "i";
            $paramValue = array($agency_id);

            $result = $this->connection->runQuery($query, $paramType, $paramValue);
            return $result;
        }

        public function editAgency($agency_name, $funds_received, $date_received, $num_of_projects, $total_expense, $total_balance, $agency_id){
            $query = "UPDATE funds SET agency_name = ?, funds_received = ?, date_received = ?, num_of_projects = ?, total_expense = ?, total_balance = ? WHERE agency_id = ?";
            $paramType = "sisiiii";
            $paramValue = array(
                $agency_name,
                $funds_received,
                $date_received,
                $num_of_projects,
                $total_expense,
                $total_balance,
                $agency_id
            );

            $this->connection->update($query, $paramType, $paramValue);
        }*/
        public function getAgencyName($agency_id){
            $agency_name;
            $query = "SELECT agency_name FROM funding_agency WHERE agency_id='$agency_id'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0){
                $agency_name_array=$result->fetch_assoc();
                $agency_name=$agency_name_array['agency_name'];
            }
            return $agency_name;
        }





        public function getAllAgency(){
            $query = "SELECT funding_agency.agency_id, funding_agency.agency_name, funding_agency_record.funds_received, funding_agency_record.date_received, funded_projects.project_id, funded_projects.total_expense, funded_projects.total_balance FROM funding_agency INNER JOIN funding_agency_record ON funding_agency.agency_id=funding_agency_record.agency_id INNER JOIN funded_projects ON funding_agency.agency_id=funded_projects.agency_id";
            // $query = "SELECT * FROM funding_agency";
            // $query = "SELECT funding_agency.agency_name, funding_agency_record.funds_received FROM funding_agency INNER JOIN funding_agency.agency_id = funding_agency_record.agency_id";
            $result = $this->connection->query($query);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $resultset[]=$row;
                }
            }
            return $resultset;
        }
    } 
?>