<?php
    class Router{
        protected $routes=[];
        protected $controller='ErrorPage';
        protected $method='pageNotFound';

        public function __construct(){
            $this->routes=[];
        }

        public function addRoute($pattern,$controller,$method){
            array_push($this->routes,[$pattern,$controller,$method]);
        }

        public function route($url){
            foreach($this->routes as $route){
                if($url==$route[0]){
                    $this->controller=$route[1];
                    $this->method=$route[2];
                break;
                }
            }
            require_once __DIR__.'/../controllers/'.$this->controller.'.php';
            $arr=explode('/',$this->controller);
            $this->controller=end($arr);
            $this->controller=new $this->controller;
            call_user_func(array($this->controller,$this->method));
        }
    }
?>