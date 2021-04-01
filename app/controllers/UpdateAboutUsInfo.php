<?php
    //CONTROLLER
    session_start();
    class UpdateAboutUsInfo extends Controller{
        private $model; 
        private $content ; 
    
        public function __construct(){
            $this->model=$this->model('UpdateAboutUsInfo');
            $this->content=$this->model->getExistingContent();
            
            // echo $result ;
       
        }
        public function updateAboutUsInfo(){
            if(isset($_POST['submit'])){
                $this->infoUpdate();
            }
            else{
                $this->view('admin/update_about_us_info');  
            }
        }
        //retrieve content from the content variable
        public function getContent(){
            return $this->content ;
        }
        private function infoUpdate(){
            // print_r($result);
            $this->model->setInfoToVar() ;
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