<?php
    class Login extends Controller{
        public function userLogin(){
            if(isset($_POST['login'])){
                $this->proceedLogin();
            }
            else{
                $this->view('login/index');
            }
        }
        private function proceedLogin(){
            $user=$this->model('Login');
            $user->setLoginDetails();
            if($user->checkLoginDetails()){
                session_start();
                $_SESSION['username']=$user->getUsername();
                $agencyTag=substr($_SESSION['username'],0,3);
                // for admin
                if($agencyTag=='adm')
                    header('Location:#');
                //for divisions
                 
            }
        }
    }
?>