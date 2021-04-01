<?php
    session_start();
    class AdminUpdateAccount extends Controller{
        private $model ;
        private $result ;
        private $userType ;
        private $searchId ;
        private $temp ;

        public function __construct(){
            $this->model=$this->model('AdminUpdateAccount');
            // $this->result = $this->model->fetchDisData($this->searchId) ;  
        }

        public function adminUpdateAccount(){
            if(isset($_POST['search'])){
                $this->searchId = $_POST['search_user_id'];
                $this->userType=$this->model->checkAvailability($this->searchId);
                if($this->userType){
                    // echo 'User present';
                    if($this->userType=='div'){
                        $this->result = $this->model->fetchDivData($this->searchId);
                        if($this->result){
                            // echo "<script>alert('Division users data loaded');</script>";
                            // echo "<script>window.location.href='update_accounts';</script>";
                            $this->view('admin/admin_update_account');
                        }   
                    }
                    if($this->userType=='dis'){
                        $this->result = $this->model->fetchDisData($this->searchId);
                        if($this->result){
                            // echo "<script>alert('District user's data loaded');</script>";
                            // echo "<script>window.location.href='update_accounts';</script>";
                            $this->view('admin/admin_update_account');
                        }
                    }

                }
                else{
                        echo "<script>alert('User not found!')</script>";
                        echo "<script>window.location.href='update_accounts';</script>";
                    }
            }
            else if(isset($_POST['submit'])){
                //update table
                $this->model->setDetails();
                
                //retriev updated data
                $this->searchId = $_POST['user_id'];
                $this->userType=$this->model->checkAvailability($this->searchId);
                if($this->userType){
                    // echo 'User present';
                    if($this->userType=='div'){
                        $this->result = $this->model->fetchDivData($this->searchId);
                        if($this->result){
                            // echo "<script>alert('Division users data loaded');</script>";
                            // echo "<script>window.location.href='update_accounts';</script>";
                            $this->view('admin/admin_update_account');
                        }   
                    }
                    if($this->userType=='dis'){
                        $this->result = $this->model->fetchDisData($this->searchId);
                        if($this->result){
                            // echo "<script>alert('District user's data loaded');</script>";
                            // echo "<script>window.location.href='update_accounts';</script>";
                            $this->view('admin/admin_update_account');
                        }
                    }

                }
                $this->view('admin/admin_update_account');
            }else{
                $this->view('admin/admin_update_account');
            }
        }

        public function testUserType(){
            return $this->userType ;
        }

        // function to check whether controller is connected to the view
        // public function testView(){
        //     return $this->result ;
        // }
        public function viewDetailsinForm(){
            // echo print_r($this->result);
            // echo $this->result=$this->model->fetchDivData($_POST['search_user_id']);
            return $this->result ;
    
        }
        
        // public function getResult(){
        //     return $this->result;
        // }

    }
?>