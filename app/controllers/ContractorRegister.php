<?php
require_once __DIR__ . '/../mailer/MailSender.php';

    Class ContractorRegister extends Controller{
        private $model;
        //public $contractors=[];

        public function __construct(){
            $this->model=$this->model('ContractorRegister');

        }

        public function contractorRegister(){
            if(isset($_POST['submit'])){
                $this->proceedRegistration();
            }else{
                $this->view('home/contractor_register');
            }
        }
    }
?>