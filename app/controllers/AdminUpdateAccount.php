<?php
    session_start();
    class AdminUpdateAccount extends Controller{
        private $result;
        private $modle;
        
        public function __construct(){
            $this->model=$this->model('AdminUpdateAccount');
        }

        public function adminUpdateAccount(){
            if(isset($_POST['submit'])){
                if($this->getDetails())
            }
            else
                $this->view('admin/admin_update_account');
        }

        public function getDetails(){
            $this->result=$this->model->getData();
        }

        public function getResult(){
            return $result;
        }

    }
?>