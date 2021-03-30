<?php
    class DisViewMonthlyReport extends Controller{
        public $result;

        public function disViewMonthlyReport(){
            $this->view('district/view_monthly_reports');
        }

        public function __construct(){
            $this->getDetails();
        }

        private function getDetails(){
            $model=$this->model('DisViewMonthlyReportList');
            $this->result=$model->getData();
        }
    }
?>