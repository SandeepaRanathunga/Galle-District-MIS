<?php
    class FinishedProjects extends Controller{
        private $model;
        public $divisions=[];

        public function __construct(){
            $this->model=$this->model('FinishedProjects');
            $this->divisions=$this->model->getDivisions();
        }
        public function FinishedProjects(){
            $this->view('home/finished_projects');
        }
    }
?>