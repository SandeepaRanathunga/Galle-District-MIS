<?php
    class DisViewProjectProposals extends Controller{
        public $result;
        public function disViewProjectProposals(){
            $this->view('district/view_project_proposals');
        }

        public function __construct(){
            $this->getDetails();
        }
        private function getDetails(){
            $model=$this->model('ViewProjectProposal');
            $this->result=$model->getData();


        }
    }
?>