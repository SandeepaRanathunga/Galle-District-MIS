<?php
    session_start();
    class DisViewMonthlyReport extends Controller{
        public $report_id;
        private $model;
        private $report_details=[];

        public function __construct(){
            $this->model=$this->model('DisViewMonthlyReport');
            $this->setReportId();
            $this->setReportData();
            $this->setViewStatus();
        }

        public function disViewMonthlyReport(){
            if(isset($_POST['approve'])){
                // echo "<script>alert('Are you sure you want to approve the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->approveReport($this->report_id);
                echo "<script>alert('Report Approved!');</script>";
                echo "<script>window.location.href='dis_view_report?id={$this->report_id}',true;</script>";   
            }
            else if(isset($_POST['reject'])){
                // echo "<script>alert('Are you sure you want to reject the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->rejectReport($this->report_id);
                echo "<script>alert('Report Rejected!');</script>";
                echo "<script>window.location.href='dis_view_report?id={$this->report_id}',true;</script>";
            }
            else
                $this->view('district/view_report');
        }

        private function setViewStatus(){
            $this->model->updateViewStatus($this->report_id);
        }
        private function setReportId(){
            $this->report_id=filter_var(rtrim($_GET['id'],'/'),FILTER_SANITIZE_URL);
        }

        private function setReportData(){
            $this->report_details=$this->model->getData($this->report_id);
        }

        public function getReportData(){
            return $this->report_details;
        }
    }
?>