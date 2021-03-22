<?php
require_once __DIR__ . '/../mailer/MailSender.php';
    class PasswordReset extends Controller{
        public $token;
        private $user_id;
        private $email;
        private $model;
        public $error;

        public function __construct(){
            $this->model=$this->model('PasswordReset');
            if(isset($_GET['token'])){
                $this->checkAvailability();
            }
        }

        public function index(){
            if(isset($_POST['reset'])){
                $this->proceedReset();
            }
            else{
                $this->view('password_reset/password_reset');

            }
        }
        private function setToken(){
            $this->token=filter_var(rtrim($_GET['token'],'/'),FILTER_SANITIZE_URL);
        }
        private function checkAvailability(){
            $this->setToken();
            $result=$this->model->tokenExist($this->token);
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $this->email=$row['email'];
            }
            else{
                echo "<script>alert('Token does not exist.Please try again with a new link');</script>";
                echo "<script>window.location.href='email_verify';</script>";   
            }
            
            
        }
        private function proceedReset(){
            $this->model->setPassword();
            if($this->model->matchPassword()){
                $result=$this->model->resetPassword($this->email);
                if($this->model->getConnection()->affected_rows>0){
                    $this->model->deleteToken($this->email);
                    echo "<script>alert('Password reseted sucessfully!');</script>";
                    echo "<script>window.location.href='login';</script>";
                }
                else{
                    echo "<script>alert('Failed to reset the password.Please try again!');</script>";
                    echo "<script>window.location.href='password_reset?token=$this->token';</script>";
                }
            }
            else{
                echo "<script>alert('Password and confim password must be the same!');</script>";
                echo "<script>window.location.href='password_reset?token=$this->token';</script>";    
            }
        }
    }

?>