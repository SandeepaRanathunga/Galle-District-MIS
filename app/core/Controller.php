<?php
    class Controller{
        protected function view($view){
            require_once __DIR__.'/../views/'.$view.'.php';
        }
    }
?>