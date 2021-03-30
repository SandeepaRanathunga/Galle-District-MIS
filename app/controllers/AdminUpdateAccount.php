<?php
    session_start();
    class AdminUpdateAccount extends Controller{
        private $modle;
        
        public function __construct(){
            $this->model=$this->model('AdminUpdateAccount');
        }

        public function adminUpdateAccount(){
            if(isset($_POST['search'])){
                $searchID = $_POST['search_user_id'];
                if($this->getDetails())
                    $this->getResult();
            }
            else
                $this->view('admin/admin_update_account');
        }

        public function getDetails(){
            $result=$this->model->getDivData();
        }

        public function getResult(){
            return $result;
        }

    }
?>