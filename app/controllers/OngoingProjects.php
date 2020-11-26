<?php
    class OngoingProjects extends Controller{
        private $model;
        public $divisions=[];

        public function __construct(){
            $this->model=$this->model('OngoingProjects');
            $this->divisions=$this->model->getDivisions();
        }
        public function ongoingProjects(){
            $this->view('home/ongoing_projects');
        }
    }
?>