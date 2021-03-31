<?php
    class FinishedProjects extends Controller{
        private $model;
        public $divisions=[];
        public $projects_count=[];

        public function __construct(){
            $this->model=$this->model('FinishedProjects');
            $this->divisions=$this->model->getDivisions();
            $this->projects_count=$this->model->getFinishedProjects();
        }
        public function FinishedProjects(){
            $this->view('home/finished_projects');
        }
    }
?>