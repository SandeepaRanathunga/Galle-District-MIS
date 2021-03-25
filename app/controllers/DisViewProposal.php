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
            if(isset($_POST['approve'])){
                echo "<script>alert('Are you sure you want to approve the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->approveProposal($this->proposal_id);
                // echo "<script>alert('{$this->proposal_id}');</script>";
                echo "<script>window.location.href='dis_view_proposal?id={$this->proposal_id}',true;</script>";   
            }
            else if(isset($_POST['reject'])){
                echo "<script>alert('Are you sure you want to reject the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->rejectProposal($this->proposal_id);
                echo "<script>window.location.href='dis_view_proposal?id={$this->proposal_id}',true;</script>";
            }
            else
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