<?php
    class OngoingProjects extends Controller{
        private $model;
        public $divisions=[];
        public $projects_count=[];


        public function __construct(){
            $this->model=$this->model('OngoingProjects');
            $this->divisions=$this->model->getDivisions();
            $this->projects_count=$this->model->getOngoingProjects();
        }
        public function ongoingProjects(){
            $this->view('home/ongoing_projects');
        }
    }
?>