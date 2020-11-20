<?php
    session_start();
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
            $result=$model->checkUserID();
            if(mysqli_num_rows($result)>0){
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
                    echo "<script>alert('Incorrect Password!')</script>";
                    echo "<script>window.location.href='login';</script>";
                }
            }
            else{
                echo "<script>alert('User not found!')</script>";
                echo "<script>window.location.href='login';</script>";
            }
            
        }
        private function adminHeader($model){
                $_SESSION['userID']=$model->getuserID();
                $_SESSION['userName']=$model->getUserName();
                echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
                echo "<script>window.location.href='create_account';</script>";
        }
        private function divisionHeader($model){
                $_SESSION['userID']=$model->getuserID();
                $_SESSION['userName']=$model->getUserName();
                $_SESSION['office_id']=$model->getOfficeID();
                echo "<script>alert('Welcome {$_SESSION['userName']}!');</script>";
                echo "<script>window.location.href='login';</script>";
        }
        private function districtHeader($model){

        }
        private function contractorHeader($model){

        }
        private function loginError($model){

        }
    }
?>