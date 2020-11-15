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
                header('Location: add_monthly_report');
                 
            }
        }
    }
?>