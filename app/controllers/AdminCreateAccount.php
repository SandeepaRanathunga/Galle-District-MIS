<?php
    session_start();
    require_once __DIR__ . '/../mailer/MailSender.php';
    class AdminCreateAccount extends Controller{
        private $model;
        public $divisions=[];
        public $emails=[];
        

        public function __construct(){
            $this->model=$this->model('Signup');
            $this->divisions=$this->getdivisionList();
            $this->emails=$this->getEmails();
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
                if($this->model->validateData()){
                    $result=$this->model->insertUserDetails();
                    if($result){
                        if($this->sendCreditions()){
                            echo "<script>alert('Data inserted sucessfully and login creditions sent to the user!');</script>";
                            echo "<script>window.location.href='create_accounts';</script>";   
                        }
                        else{
                            echo "<script>alert('Data inserted sucessfully but failed to send the login creditions to the user!');</script>";
                            echo "<script>window.location.href='create_accounts';</script>";   
                        }
                    }
                    else{
                        echo "<script>alert('Something went wrong!')</script>";
                        echo "<script>window.location.href='create_accounts';</script>";
                    }
                }
                else{
                     echo 'Data not validated';
                }
        }
        private function sendCreditions(){
            $name=$this->model->getName();
            $email=$this->model->getEmail();
            $userID=$this->model->getUserID();
            $to=$email;
            $from='sandeepaucsc@gmail.com';
            $subject='Login creditions to the Galle District Project Handeling and Evaluation MIS.';
            $message="Dear {$name},<br>";
            $message.='You have been given access to the Galle District Project Handeling and Evaluation MIS. <br>';
            $message.='Please note that you sholud use the provided User ID whenever you log into the system. <br>';
            $message.=" userID : {$userID}<br>";
            $message.="Use the following link to reset your automatically generated password and activate your account. You should use your registered email address to verify it is you.<br>";
            $message.="http://localhost/Galle-District-mis/email_verify";
            $message.="<br>Greetings! - Admin";


            $mailSender=new MailSender($to,$from,$subject,$message);
            $result=$mailSender->sendMail();
            return $result;
        }
        public function getDivisionList(){
            return $this->model->getDivisions();
        }
        public function getEmails(){
            return $this->model->getEmails();
        }
    } 
?>