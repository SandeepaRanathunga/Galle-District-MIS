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

        public function getAllAgency(){
            $query = "SELECT * FROM funds ORDER BY agency_id";
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