<?php
require_once __DIR__ . '/../database/Database.php';
require_once __DIR__ . '/../models/DisManageFunds.php';

class DisManageFunds extends Controller{
    private $model;

    public function __construct(){
        $this->model=$this->model('DisManageFunds');
        $this->funds=$this->model->getAllAgency();
    }

    public function disManageFunds(){
        $this->view('district/dis_manage_funds_record');
    }
}
/*
$this-> = new Database();

$action = "";
if(! empty($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    case "dis_manage_funds_edit":
        $agency_id = $_GET["agency_id"];
        $agency = new DisManageFunds();
    
        if(isset($_POST['add'])){
            $agency_name = $_POST['agency_name'];
            $funds_received = $_POST['funds_received'];
            $date_received="";
            if($_POST["date_received"]){
                $date_timestamp = strtotime($_POST["date"]);
                $date_received = date("Y-m-d", $date_timestamp);
            }
            $num_of_projects = $_POST['num_of_projects'];
            $total_expense = $_POST['total_expense'];
            $total_balance = $_POST['total_balance'];
    
            $agency->editAgency($agency_name, $funds_received, $date_received, $num_of_projects, $total_expense, $total_balance);
            header("Location: dis_manage_funds");
        }
        $result = $agency->getAgencyByID($agency_id);
        require_once "dis_manage_funds_edit";
        break;
    
    default:
        $agency= new DisManageFunds();
        $result= $this->$agency->getAllAgency();
        require_once "dis_manage_funds";
    break;
}*/
?>