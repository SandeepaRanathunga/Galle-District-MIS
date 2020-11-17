<?php
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
                echo "<script>alert('Data inserted sucessfully!')</script>";
            }
            else{
                echo "<script>alert('Something went wrong!')</script>";
            }
        }
        public function getDivisionList(){
            return $this->model->getDivisions();
        }
    }
?>