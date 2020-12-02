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
                        echo "<script>alert('User registration succesfull and admin will evaluate your request and send credentials!');</script>";
                    }else{
                        echo "<script>alert('Something went wrong!');</script>";
                        echo "<script>window.location.href='contractor_register';</script>";
                    }
                        /*if($this->sendCreditions()){
                            echo "<script>alert('Data inserted sucessfully and login creditions sent to the user!');</script>";
                            echo "<script>window.location.href='create_accounts';</script>";   
                        }
                        else{
                            echo "<script>alert('Data inserted sucessfully but failed to send the login creditions to the user!');</script>";
                            echo "<script>window.location.href='contractors';</script>";   
                        }
                    }
                    else{
                        echo "<script>alert('Something went wrong!')</script>";
                        echo "<script>window.location.href='create_accounts';</script>";
                    }*/
                }
                else{
                     echo 'Data not validated';
                }
        }
        // private function sendCreditions(){
        //     $name=$this->model->getName();
        //     $email=$this->model->getEmail();
        //     $userID=$this->model->getUserID();
        //     $password=$this->model->getPassword();
        //     $to=$email;
        //     $from='sandeepaucsc@gmail.com';
        //     $subject='Login creditions to the Galle District Project Handeling and Evaluation MIS.';
        //     $message="Dear {$name},<br>";
        //     $message.='You have been given access to the Galle District Project Handeling and Evaluation MIS. <br>';
        //     $message.='Please use this userID and password to log into the system and these creditions are highly confidential. <br>';
        //     $message.=" userID : {$userID}<br>";
        //     $message.=" password : {$password}<br>";
        //     $message.="Use the following link to visit the MIS.<br>";
        //     $message.="http://localhost/Galle-District-mis";
        //     $message.="<br>Greetings! - Admin";


        //     $mailSender=new MailSender($to,$from,$subject,$message);
        //     $result=$mailSender->sendMail();
        //     return $result;
        // }
        

    }
?>