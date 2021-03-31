<?php
    session_start();
    class DivRespondContractors extends Controller{
        private $result;
        // private $model;
        // private $contract_details=[];

        public function divRespondContractors(){
            $this->view('division/respond_contractors');
        }

        public function __construct(){
            $this->getDetails();
        }

        private function getDetails(){
            $model=$this->model('DivRespondContractorsList');
            $this->result=$model->getData($_SESSION['office_id']);
        }

        public function getResult(){
            return $this->result;
        }


    }
?>