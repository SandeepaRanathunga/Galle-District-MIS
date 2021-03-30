<?php
    class DivRespondContractorRequest extends Controller{ 
        private $model;
        private $request_details=[];
        public $id;

        public function __construct(){
            $this->model=$this->model('DivRespondContractorRequest');
            $this->setRequestId();
            $this->setRequestData();
            $this->setViewStatus();
        }

        public function divRespondContractorRequest(){
            if(isset($_POST['approve'])){
                // echo "<script>alert('Are you sure you want to approve the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->approveRequest($this->id);
                echo "<script>alert('Proposal Approved!');</script>";
                echo "<script>window.location.href='respond_contractor_request?id={$this->id}',true;</script>";   
            }
            else if(isset($_POST['reject'])){
                // echo "<script>alert('Are you sure you want to reject the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->rejectRequest($this->id);
                echo "<script>alert('Proposal Rejected!');</script>";
                echo "<script>window.location.href='respond_contractor_request?id={$this->id}',true;</script>";
            }
            else
                $this->view('division/respond_contractor_request');
        }

        private function setViewStatus(){
                $this->model->updateViewStatus($this->id);
        }

        private function setRequestId(){
            $this->id=filter_var(rtrim($_GET['id'],'/'),FILTER_SANITIZE_URL);
        }

        private function setRequestData(){
            $this->request_details=$this->model->getData($this->id);
            echo "kkk";
        }

        public function getRequestData(){
            return $this->request_details;
        }   
        
    }
?>