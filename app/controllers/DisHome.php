<?php
    session_start();
    class DisHome extends Controller{

        private $model;
        public $proposal_count;
        public $report_count;

        public function __construct(){
            $this->model=$this->model('DisHome');
            $this->proposal_count=$this->setProposalCount();
            $this->report_count=$this->setReportCount(); 
        }
        public function disHome(){
            $this->view('district/index');
        }
        private function setProposalCount(){
            return $this->model->getProposalNotifications();
        }

        private function setReportCount(){
            return $this->model->getReportNotifications();
        }
    }
?>