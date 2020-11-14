<?php
    class EmailVerify extends Controller{
        public function verifyEmail(){
            $this->view('password_reset/email_verify');
        }
    }
?>