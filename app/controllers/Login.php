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
                        $this->adminHeader();
                    else if($userType=='div')
                        $this->divisionHeader();
                    else if($userType=='dis')
                        $this->districtHeader();
                    else
                        $this->contractorHeader();
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
        private function adminHeader(){

        }
        private function divisionHeader(){
            
                echo "<script>alert('Welcome division user!');</script>";
                echo "<script>window.location.href='login';</script>";
        }
        private function districtHeader(){

        }
        private function contractorHeader(){

        }
        private function loginError(){

        }
    }
?>