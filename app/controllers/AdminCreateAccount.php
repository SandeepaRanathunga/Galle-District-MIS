<?php
require_once __DIR__ . '/../mailer/MailSender.php';
session_start();
    class AdminCreateAccount extends Controller{
        private $model;
        public $divisions=[];
        

        public function __construct(){
            $this->model=$this->model('Signup');
            $this->divisions=$this->getdivisionList();
        }
        public function adminCreateAccount(){
            if(isset($_POST['submit']))
                $this->proceedRegistration();
            else{
                $this->view('admin/admin_create_account');
            }
        }
        private function proceedRegistration(){
            $this->model->setDetails();
            $result=$this->model->insertUserDetails();
            if($result){
                $this->sendCreditions();
                echo "<script>alert('Data inserted sucessfully and login creditions sent to the user!');</script>";
                echo "<script>window.location.href='admin_create_account';</script>";   
            }
            else{
                echo "<script>alert('Something went wrong!')</script>";
            }
        }
        private function sendCreditions(){
            $name=$this->model->getName();
            $email=$this->model->getEmail();
            $userID=$this->model->getUserID();
            $password=$this->model->getPassword();
            $to=$email;
            $from='sandeepaucsc@gmail.com';
            $subject='Login creditions to the Galle District Project Handeling and Evaluation MIS.';
            $message="Dear {$name},<br>";
            $message.='You have been given access to the Galle District Project Handeling and Evaluation MIS. <br>';
            $message.='Please use this userID and password to log into the system and these creditions are highly confidential. <br>';
            $message.=" userID : {$userID}<br>";
            $message.=" password : {$password}<br>";
            $message.="Use the following link to visit the MIS.<br>";
            $message.="http://localhost/Galle-District-mis";
            $message.="<br>Greetings! - Admin";


            $mailSender=new MailSender($to,$from,$subject,$message);
            $result=$mailSender->sendMail();
            return $result;
        }
        public function getDivisionList(){
            return $this->model->getDivisions();
        }
    } 
?>