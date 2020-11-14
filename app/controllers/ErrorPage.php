<?php
    class ErrorPage extends Controller{
        public function pageNotFound(){
            $this->view('error/index');
        }
    }
?>