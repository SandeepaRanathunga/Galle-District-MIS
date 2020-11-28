<?php
    class DisEditFundsRecord extends Controller{
        public $agency;

        public function __construct(){
            $this->model=$this->model('DisManageFunds');
/*
            $agency_id = $_GET["agency_id"];
  

            if(isset($_POST['edit'])){
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
            $result = $this->agency->getAgencyByID($agency_id);
            require_once "dis_manage_funds_edit";
            $this->agency=$this->model->editAgency($agency_name, $funds_received, $date_received, $num_of_projects, $total_expense, $total_balance);*/
        }

        public function disEditFundsRecord(){
            $this->view('district/dis_edit_funds_record');
        }
    }
?>
