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

 
?>