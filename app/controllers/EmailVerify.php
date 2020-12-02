<?php
require_once __DIR__ . '/../mailer/MailSender.php';
    class EmailVerify extends Controller{
        private $model;
        private $email;
        private $token;

        public function __construct(){
            $this->model=$this->model('passwordReset');
        }
        public function index(){
            if(isset($_POST['send'])){
                $this->proceedReset();
            }
            else
                $this->view('password_reset/email_verify');
        }
        private function proceedReset(){
            $this->model->setEmail();
            $result=$this->model->checkEmail();
            if($result->num_rows>0){
                $result=$this->model->insertToken();
                if($result){
                    $result=$this->sendToken();
                    if($result){
                        echo "<script>alert('Token sent sucessfully.Check your email.');</script>";
                        echo "<script>window.location.href='email_verify';</script>";   
                    }
                    else{
                        //unable to send the token
                        echo "<script>alert('Failed to send the token.');</script>";
                        echo "<script>window.location.href='email_verify';</script>";   
                    }
                }
                else{
                    //something went wrong
                        echo "<script>alert('Something went wrong.');</script>";
                        echo "<script>window.location.href='email_verify';</script>";   
                }
            }
            else{
                echo "<script>alert('There is no user registered with this email.Please enter a valid email.');</script>";
                echo "<script>window.location.href='email_verify';</script>";   
            }
        }

        private function sendToken(){
            $this->email=$this->setEmail();
            $this->token=$this->setToken();
            $to=$this->email;
            $from='sandeepaucsc@gmail.com';
            $subject="Password reset token";
            $message='We have got your request to reset your password.<br>';
            $message.='Please follow the url and reset your password.The link will only be valid for one time use only.<br>';
            $message.='http://localhost/Galle-District-MIS/password_reset?token='.$this->token;
            $header="From: {$from}\r\nContent-Type: text/html;";

            $mailSender=new MailSender($to,$from,$subject,$message);
            $result=$mailSender->sendMail();
            return $result;
        }

        private function setToken(){
            return $this->model->getToken();
        }
        private function setEmail(){
            return $this->model->getEmail();
        }
        
    }
?>