<?php

    //CONTROLLER
    class UpdateAboutUsInfo extends Controller{
        private $model;
       // private $result_arr [] ; 
        private $content ; 

        public function UpdateAboutUsInfo(){
            if(isset($_POST['submit'])){
                $this->infoUpdate();
            }
            else{
                $this->view('admin/update_about_us_info');
                
            }
        }
        public function __construct(){
            $this->model=$this->model('UpdateAboutUsInfo');
            $this->content=$this->model->getExistingContent();
        }

        //getting the content from the content variable
        public function getContent(){
            return $this->content ;
        }


        private function infoUpdate(){
            $result=$this->model->updateInfo();
            if($result){
                     echo "<script>alert('About us updated sucessfully!');</script>";
                     echo "<script>window.location.href='admin_home';</script>";
                }
                else{
                    echo "<script>alert('Something went wrong.Please try again!');</script>";
                    echo "<script>window.location.href='update_about_us_info';</script>";
                }
            
            
        }
        
    }

    
?>