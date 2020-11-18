<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    require_once __DIR__ . '/../mailer/MailSender.php';

    class PasswordReset{
        private $email;

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        public function setEmail(){
            $this->email=htmlspecialchars(trim($_POST['email']));
        }
        public function checkEmail(){
            
        }
    } 
?>