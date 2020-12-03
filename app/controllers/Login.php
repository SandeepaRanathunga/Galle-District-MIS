<?php
    session_start();
    // if(isset($_SESSION['userName'])){
    //     header('Location:#');
    // }
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
            $model=$this->model('Login');
            $model->setLoginDetails();
            $result=$model->checkUser();
            if($result->num_rows>0){
                if($model->checkPassword($result)){
                    $userType=$model->getUserType();
                    if($userType=='adm')
                        $this->adminHeader($model);
                    else if($userType=='div')
                        $this->divisionHeader($model);
                    else if($userType=='dis')
                        $this->districtHeader($model);
                    else
                        $this->contractorHeader($model);

                }
                else{
                    echo "<script>alert('Incorrect password!');</script>";
                    echo "<script>window.location.href='login';</script>"; 
                }
            }
            else{
                echo "<script>alert('User not found!');</script>";
                echo "<script>window.location.href='login';</script>"; 
            }
            
                
        }
        private function adminHeader($model){
            $_SESSION['userID']=$model->getuserID();
            $_SESSION['userName']="Admin";
            echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
            echo "<script>window.location.href='admin_home';</script>";
        }
        private function divisionHeader($model){
            $_SESSION['userID']=$model->getuserID();
            $_SESSION['userName']=$model->getUserName('div_user');
            $_SESSION['office_id']=substr($_SESSION['userID'],0,5);
            echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
            echo "<script>window.location.href='div_home';</script>";
        }
        private function districtHeader($model){
            $_SESSION['userID']=$model->getuserID();
            $_SESSION['userName']=$model->getUserName('dis_user');
            echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
            echo "<script>window.location.href='dis_home';</script>";
        }
        private function contractorHeader($model){
            $_SESSION['userID']=$model->getuserID();
            $_SESSION['userName']=$model->getUserName('contractor');
            echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
            echo "<script>window.location.href='contractor_home';</script>";
        }
    }
?>