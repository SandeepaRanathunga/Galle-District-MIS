<?php
require_once("/../database/Database.php");
require_once("/../models/DisManageFunds.php");

class DisManageFunds extends Controller{
    public function disManageFunds(){
        $this->view('district/dis_manage_funds_record');
    }

    $db_handle = new Database();

    $action = "";
    if(! empty($_GET["action"])){
        $action = $_GET["action"];
    }


    switch($action):{
        case "dis_manage_funds_edit":
            $agency_id = $_GET["agency_id"];
            $agency = new Agency();
        
            if(isset($_POST['add'])){
                $agency_name = $_POST['agency_name'];
                $funds_received = $_POST['funds_received'];
                $date="";
                if($_POST["date"]){
                    $date_timestamp = strtotime($_POST["date"]);
                    $date = date("Y-m-d", $date_timestamp);
                }
                $num_of_projects = $_POST['num_of_projects'];
                $total_expense = $_POST['total_expense'];
                $total_balance = $_POST['total_balance'];
        
                $agency->editAgency($agency_name, $funds_received, $date, $num_of_projects, $total_expense, $total_balance);
                header("Location: dis_manage_funds");
            }
            $result = $agency->getAgencybyID($agency_id);
            require_once "dis_manage_funds_edit";
            break;
        
        default:
            $agency= new Agency();
            $result=$agency->getAllAgencies();
            require_once "dis_manage_funds";
            break;
    }
}
?>