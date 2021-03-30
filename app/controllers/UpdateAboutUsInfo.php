<?php
    //CONTROLLER
    class UpdateAboutUsInfo extends Controller{
        private $model; 
        private $content ; 
        private $enter ;

        
        public function __construct(){
            $this->model=$this->model('UpdateAboutUsInfo');
            $this->content=$this->model->getExistingContent(); 
        }

        public function updateAboutUsInfo(){
            if(isset($_POST['submit'])){
                $this->updateInfo();
            }
            else{
                $this->view('admin/update_about_us_info');  
            }
        }

        //getting the content from the content variable
        public function getContent(){
            return $this->content ;
        }

        private function updateInfo(){
            $result=$this->model->updateInfo();
            if($result){
                echo "<script>alert('About us updated sucessfully!');</script>";
                echo "<script>window.location.href='admin_home';</script>";
                }
            else{
                echo "<script>alert('Unable to update. Please try again!');</script>";
                echo "<script>window.location.href='update_about_us';</script>";
            }            
        }
        
    }

    
?>