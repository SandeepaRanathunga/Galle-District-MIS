<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ContractorRegister{
        private $user_id;
        private $name;
        private $office_id;
        private $reg_no;
        private $specialized_field;
        private $nic;
        private $office_address;
        private $contact_no;
        private $email;
        private $password;
        private $hashed_password;
        private $confirm_password;
        private $connection;
        
        public function __construct(){
            $this->connection=$this->dbConnect();
        }

        //set the data received from input fields
        public function setDetails(){
            $this->user_id=$this->clearInputs($_POST['user_id']);
            $this->name=$this->clearInputs($_POST['name']);
            $this->office_id=$this->clearInputs($_POST['office_id']);
            $this->reg_no=$this->clearInputs($_POST['reg_no']);
            $this->specialized_field=$this->clearInputs($_POST['specialized_field']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->office_address=$this->clearInputs($_POST['office_address']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->password=$this->clearInputs($_POST['password']);
            $this->confirm_password=$this->clearInputs($_POST['confirm_password']);

            $this->hashed_password=password_hash($this->password,PASSWORD_DEFAULT);
            
        }
    }
?>