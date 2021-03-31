<?php
    class DisViewMonthlyReport extends Controller{
        public $report_id;
        private $model;
        private $report_details=[];

        public function __construct(){
            $this->model=$this->model('DisViewMonthlyReport');
            $this->setReportId();
            $this->setReportData();
        }

        public function disViewMonthlyReport(){
            if(isset($_POST['approve'])){
                echo "<script>alert('Are you sure you want to approve the monthly report? Once you approved you are unable to revise it.');</script>";
                $this->model->approveReport($this->report_id);
                echo "<script>window.location.href='dis_view_monthly_report?id={$this->report_id}',true;</script>";
            }
            else if(isset($_POST['reject'])){
                echo "<scrpit>alert('Are you sure you want to reject the proposal? Once you rejected you are unable to revise it.');</script>";
                $this->model->rejectReport($this->report_id);
                echo "<script>window.location.href='dis_view_monthly_report?id={$this->report_id}',true;</scrpit>";
            }
            else
                $this->view('district/view_monthly_reports');
        }

        private function setReportId(){
            $this->report_id=filter_var(rtrim($_GET['id'],'/'),FILTER_SANITIZE_URL);
        }

        private function setProposalData(){
            $this->report_details=$this->model->getData($this->report_id);
        }

        public function getReportData(){
            return $this->report_details;
        }

    }
?>