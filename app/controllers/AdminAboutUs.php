<?php
    class AdminAboutUs extends Controller{
        private $model ;
        private $content ; //variable to store the content in the info cell

        public function __construct(){
            $this->model=$this->model('AdminAboutUs');
            $this->content=$this->model->getNewContent();
            
        }
        public function adminAboutUs(){
            $this->view('/home/about_us');
        }
        //getting content from the content variable
        public function getContent(){
            return $this->content ;
        }
            
        }
    
?>