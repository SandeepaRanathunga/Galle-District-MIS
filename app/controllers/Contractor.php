<?php
    session_start();
    class Contractor extends Controller{
        public function contractor(){
            $this->view('home/contractor');
        }
    }
?>