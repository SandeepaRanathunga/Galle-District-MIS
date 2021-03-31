<?php
    session_start();
    class AdminHome extends Controller{
        public function adminHome(){
            $this->view('admin/index');
        }
    }
?>