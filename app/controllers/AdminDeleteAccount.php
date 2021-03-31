<?php
    session_start();
    class AdminDeleteAccount extends Controller{
        public function adminDeleteAccount(){
            $this->view('admin/admin_delete_account');
        }
    }
?>