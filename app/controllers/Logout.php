<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('Location:login');
    }
    class Logout extends Controller{
        public function index(){
            session_destroy();
            header('Location: login');
        }
    }
?>