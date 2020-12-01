<?php
    class DisFundingAgencies extends Controller{
        private $model;
        public $agencies=[];

        public function __construct(){
            $this->model=$this->model('DisFundingAgencies');
            $this->agencies=$this->model->getAgencies();
        }

        public function disFundingAgencies(){
            $this->view('district/funding_agencies');
        }
    }
?>