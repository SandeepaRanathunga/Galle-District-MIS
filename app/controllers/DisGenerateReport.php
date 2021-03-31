<?php
    session_start();
    class DisGenerateReport extends Controller{
        public function disGenerateReport(){
            $this->view('district/generate_annual_report');
        }
    }
?>