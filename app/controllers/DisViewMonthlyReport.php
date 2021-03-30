<?php
    class DisViewMonthlyReport extends Controller{
        public $result;

        public function disViewMonthlyReport(){
            $this->view('district/view_monthly_reports');
        }

        public function __construct(){
            $this->model=$this->model('DisViewMonthlyReport');
            $this->setReportId();
            $this->setReportData();
        }

        private function getDetails(){
            $model=$this->model('ViewProposalList');
            $this->result=$model->getData();
        }

    }
?>