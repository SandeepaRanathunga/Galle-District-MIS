<?php
    class AdminAboutUs extends Controller{
        private $model ;
        public $content ; //to store the content in the info cell

        public function __construct(){
            $this->model=$this->model('AdminAboutUs');
            $this->content=$this->getNewContent();
            
        }
        public function adminAboutUs(){
            $this->view('/home/about_us', $content);
        }
        
        
            
            
            // load model
            // $aboutUsModel = new aboutUsModel();
            // $data = $aboutUsModel->getdataaboutus();
            
            
            // $this->view('home/about_us', $data);
        }
    
?>