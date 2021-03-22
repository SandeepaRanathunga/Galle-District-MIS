<?php
    class DisHome extends Controller{

        private $model;
        public $proposal_count;

        public function __construct(){
            $this->model=$this->model('DisHome');
            $this->proposal_count=$this->setProposalCount();
        }
        public function disHome(){
            $this->view('district/index');
        }
        private function setProposalCount(){
            return $this->model->getProposalNotifications();
        }
    }
?>