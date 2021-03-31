<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';
    //Remove login permission from a user-account
    class AdminDeleteAcount{

        private $connection ;
        private $search ;
        private $userId ;
        private $officeId ;
        private $acName ;
        private $office ;
        private $designation ;
        private $nic ;
        private $contactNo ;
        private $email ;
        //to set to zero to delete
        private $login_permission ;


        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }
        // public function setInfoToVar(){
        //     $this->inputInfo=$this->clearInputs($_POST['updateaboutus']);
        //     //return $this->inputInfo;
              
        //}
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
        
        //Function to fetch div data
        public function fetchDivData($id){
            $result_arr = [] ;
            $query = "SELECT account.email,div_user.user_id,div_user.contact_no,div_user.designation,div_user.nic FROM account JOIN div_user ON account.user_id = div_user.user_id WHERE account.user_id = '$id'" ;
            $result=$this->connection->query($query) ;
            if ($result->num_rows>0){
                $result_arr = $result->fetch_assoc() ;
                return $result_arr ;
            }
        }
        //fetch data from district users
        public function fetchDisData($id){
            $result_arr=[];
            $query="SELECT account.email,dis_user.user_id,dis_user.name,dis_user.contact_no,dis_user.designation,dis_user.nic FROM account JOIN dis_user ON account.user_id = dis_user.user_id";
            $result=$this->connection->query($query);
            if($result->num_rows>0){
                //changing row into result_arr here ;
                $result_arr=$result->fetch_assoc();
                return $result_arr ;
            }           
        }
    }
?>