<?php
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
            else
                $this->view('admin/admin_create_account');
        }
        private function proceedRegistration(){
            var_dump($this->divisions);
        }
        public function getDivisionList(){
            return $this->model->getDivisions();
        }
    }
?>