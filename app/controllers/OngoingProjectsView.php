<?php
    class OngoingProjectsView extends Controller{
        public $div_id;
        public $div_name;
        private $model;

        public function index(){
            $this->view('home/ongoing_projects_view');
        }
        public function __construct(){
            $this->model=$this->model('OngoingProjectsView');
            $this->setDivID();
            $this->div_name=$this->model->getDivisionName($this->div_id);
        }
        
        private function setDivID(){
            $this->div_id=filter_var(rtrim($_GET['div_id'],'/'),FILTER_SANITIZE_URL);
        }
    }
?>