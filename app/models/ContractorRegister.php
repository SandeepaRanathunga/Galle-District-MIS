<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ContractorRegister{
        private $name;
        private $reg_no;
        private $specialized_field;
        private $office_address;
        private $div_id;
        private $contact_no;
        private $email;
        private $file_name; 
        private $connection;
        
        public function __construct(){
            $this->connection=$this->dbConnect(); 
        }

        public function getDivisions(){
            $result_arr=[];
            $query="SELECT * FROM division ORDER BY div_name ASC";
            $result=$this->connection->query($query);
            while($row=$result->fetch_assoc()){
                array_push($result_arr,[$row['div_id'],$row['div_name']]);
            }
            return $result_arr;
        }

        //set the data received from input fields
        public function setDetails($file_name){
            $this->name=$this->clearInputs($_POST['name']);
            $this->reg_no=$this->clearInputs($_POST['reg_no']);
            $this->specialized_field=$this->clearInputs($_POST['specialized_field']);
            $this->nic=$this->clearInputs($_POST['nic']);
            $this->office_address=$this->clearInputs($_POST['office_address']);
            $this->div_id=$this->clearInputs($_POST['div_id']);
            $this->contact_no=$this->clearInputs($_POST['contact_no']);
            $this->email=$this->clearInputs($_POST['email']);
            $this->file_name=$file_name;   
        }

        //to validate input data
        public function validateData(){
          
            return true;   
        }

        //to clear input data
        private function clearInputs($input){
            $input=trim($input);
            $input=htmlspecialchars($input);
            $input=mysqli_real_escape_string($this->connection,$input);
            return $input;
        }
       

        //connect to the database
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        //finally insert the data to the database
        public function insertData(){
<<<<<<< HEAD
            $query="INSERT INTO `contractor_request`(`name`, `reg_no`, `specialized_field`,`nic`,  `office_address`, `contact_no`, `email`, `document`) VALUES ('$this->name','$this->reg_no','$this->specialized_field', '$this->nic', '$this->office_address','$this->contact_no','$this->email','$this->file_name')";
=======
            $query="INSERT INTO `contractor_request`(`name`, `reg_no`, `specialized_field`, `office_address`, `div_id`, `contact_no`, `email`, `document`) VALUES ('$this->name','$this->reg_no','$this->specialized_field','$this->office_address', '$this->div_id','$this->contact_no','$this->email','$this->file_name')";
>>>>>>> mvc
            $result=$this->connection->query($query);
            return $result;
        }

    }
?>