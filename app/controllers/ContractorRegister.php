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

        private function proceedRegistration(){
            $this->model->setDetails();
                if($this->model->validateData()){
                    $result=$this->model->insertUserDetails();
                    if($result){
                        echo "<script>alert('User registration succesfull and The District Secretariat will evaluate your request and send credentials!');</script>";
                        echo "<script>window.location.href='';</script>";
                        

                    }else{
                        echo "<script>alert('Something went wrong!');</script>";
                        echo "<script>window.location.href='contractor_register';</script>";
                    }
                }
                else{
                     echo 'Data not validated';
                }
        }
        

    }
?>