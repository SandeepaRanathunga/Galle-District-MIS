<?php
require_once __DIR__ . '/../mailer/MailSender.php';

    Class ContractorRegister extends Controller{
        private $model;
        private $file_name;
        //public $contractors=[];

        public function __construct(){
            $this->model=$this->model('ContractorRegister');
            $this->divisions=$this->getdivisionList();
        }

        public function contractorRegister(){
            if(isset($_POST['submit'])){
                $this->proceedRegistration();
            }else{
                $this->view('home/contractor_register');
            }
        }

        private function proceedRegistration(){
            $result=$this->uploadFile();
            if($result){
                $this->model->setDetails($this->file_name);
                $result=$this->model->insertData();
                if($result){
                    echo "<script>alert('Your registration request sent sucessfully.The administration will let you know once they finished your request review.');</script>";
                    echo "<script>window.location.href='';</script>";
               }
               else{
                   echo "<script>alert('Something went wrong.Please try again!');</script>";
                   echo "<script>window.location.href='';</script>";
               }
            }
           else{
                echo "<script>alert('File upload process failed.Please try again!')</script>";
                print_r($_POST);
                print_r($_FILES);
                echo "<script>window.location.href='';</script>";
            }
            

        }
        private function uploadFile(){
            $file_name=$_FILES['file']['name'];
            $temp_file_name=$_FILES['file']['tmp_name'];
            $error=$_FILES['file']['error'];

            $temp=explode('.',$file_name);
            $file_extension=end($temp);
            $file_extension=strtolower($file_extension);
            $allowed_types=array('pdf','docx','jpeg','png');

            if(in_array($file_extension,$allowed_types)){
                if($error==0){
                    $file_name=uniqid('',true).'.'.$file_extension;
                    $this->file_name=$file_name;
                    $upload_path='uploads/con_reg_copy/'.$file_name;
                    $result=move_uploaded_file($temp_file_name,$upload_path);
                    return $result;
                    
                }
                else
                    return false;
              }
            else{
                return false;
            }
        }

        public function getDivisionList(){
            return $this->model->getDivisions();
        }        
        

    }
?>