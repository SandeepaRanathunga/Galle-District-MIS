<?php
    session_start();
    class DivRespondContractorRequest extends Controller{ 
        private $model;
        private $request_details=[];
        public $id;

        public function __construct(){
            $this->model=$this->model('DivRespondContractorRequest');
            $this->setRequestId();
            $this->setRequestData();
            $this->setViewStatus();
            $this->emails=$this->getEmails();
        }

        public function divRespondContractorRequest(){
            if(isset($_POST['approve'])){
                // echo "<script>alert('Are you sure you want to approve the proposal? Once you approved you are unable to revise it.');</script>";
                $this->proceedRegistration();
                echo "<script>alert('Request Approved!');</script>";
                echo "<script>window.location.href='respond_contractor_request?id={$this->id}',true;</script>";   
            }
            else if(isset($_POST['reject'])){
                // echo "<script>alert('Are you sure you want to reject the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->rejectRequest($this->id);
                echo "<script>alert('Request Rejected!');</script>";
                echo "<script>window.location.href='respond_contractor_request?id={$this->id}',true;</script>";
            }
            else
                $this->view('division/respond_contractor_request');
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

        private function setViewStatus(){
                $this->model->updateViewStatus($this->id);
        }

        private function setRequestId(){
            $this->id=filter_var(rtrim($_GET['id'],'/'),FILTER_SANITIZE_URL);
        }

        private function setRequestData(){
            $this->request_details=$this->model->getData($this->id);
        }

        public function getRequestData(){
            return $this->request_details;
        }
        
        public function getEmails(){
            return $this->model->getEmails();
        }

        public function insertUserDetails(){
            $query="INSERT INTO account (user_id,email,password,user_type,login_permission) VALUES ('$this->user_id','$this->email','$this->hashed_password','$this->user_type','$this->login_permission')";
            $result=$this->connection->query($query);
            if($result){
                $query="INSERT INTO contractor (user_id,name,reg_no,specialized_field,office_address,div_id,contact_no,) VALUES ('$this->user_id',$this->name','$this->reg_no','$this->specialized_field','$this->office_adddress','$this->div_id','$this->contact_no')";
                $result=$this->connection->query($query);
                return $result;
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
    }
?>