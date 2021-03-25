<?php
    class DisViewProposal extends Controller{
        public $proposal_id;
        private $model;
        private $proposal_details=[];

        public function __construct(){
            $this->model=$this->model('ViewProjectProposal');
            $this->setProposalId();
            $this->setProposalData();
        }
        public function disViewProposal(){
            $this->view('district/view_proposal');
        }

        private function setProposalId(){
            $this->proposal_id=filter_var(rtrim($_GET['id'],'/'),FILTER_SANITIZE_URL);
        }

        private function setProposalData(){
            $this->proposal_details=$this->model->getData($this->proposal_id);
        }

        public function getProposalData(){
            return $this->proposal_details;
        }
    }
?>