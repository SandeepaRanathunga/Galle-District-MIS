<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisManageFunds{
        private $db_handle;

        public function __construct(){
            $this->db_handle = new Database();
        }

        public function getAgencyByID($agency_id){
            $query = "SELECT * FROM funds WHERE agency_id = ?";
            $paramType = "i";
            $paramValue = array($agency_id);

            $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
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

            $this->db_handle->update($query, $paramType, $paramValue);
        }

        public function getAllAgency(){
            $sql = "SELECT * FROM funds ORDER BY agency_id";
            $result = $this->db_handle->runBaseQuery($sql);
            return var_dump($result);
        }
    } 
?>