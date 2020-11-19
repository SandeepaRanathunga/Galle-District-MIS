<?php
    class EmailVerify extends Controller{
        private $model;

        public function __construct(){
            $this->model=$this->model('passwordReset');
        }
        public function index(){
            if(isset($_POST['send'])){
                $this->sendToken();
            }
            else
                $this->view('password_reset/email_verify');
        }

        private function sendToken(){

        }
    }
?>