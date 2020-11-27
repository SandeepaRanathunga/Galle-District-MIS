<?php
    class OngoingProjectsView extends Controller{

        public $div_id;

        public function index(){
            $this->view('home/ongoing_projects_view');
        }
        public function __construct(){
            $this->setDivID();
        }
        private function setDivID(){
            $this->div_id=filter_var(rtrim($_GET['div_id'],'/'),FILTER_SANITIZE_URL);
        }
    }
?>