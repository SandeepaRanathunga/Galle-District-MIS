<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    function getAgencyByID($agency_id){
        $query = "SELECT * FROM funds WHERE agency_id = ?";
        $paramType = "i";
        $paramValue = array($agency_id);

        $result = $this->db_handle->run_Query($query, $paramType, $paramValue);
        return $result;
    }

    function editAgency($agency_name, $funds_received, $date, $num_of_projects, $total_expense, $total_balance, $agency_id){
        $query = "UPDATE funds SET agency_name = ?, funds_received = ?, date = ?, num_of_projects = ?, total_expense = ?, total_balance = ? WHERE agency_id = ?";
        $paramType = "sisiiii";
        $paramValue = array(
            $agency_name,
            $funds_received,
            $date,
            $num_of_projects,
            $total_expense,
            $total_balance,
            $agency_id
        );

        $this->db_handle->update($query, $paramType, $paramValue);
    }

 
?>