<?php
    class Controller{
        // public $name="sandeepa";
        protected function view($view){
            require_once __DIR__.'/../views/'.$view.'.php';
        }
        protected function model($model){
            require_once __DIR__.'/../models/'.$model.'.php';
            $model='model\\'.$model;
            return new $model;
        }
    }
?>