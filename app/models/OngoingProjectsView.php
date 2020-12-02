<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class OngoingProjectsView{
        private $connection;

        public function __construct(){
            $this->connection = $this->dbConnect();
        }

        private function dbConnect(){
            $database = new \Database();
            return $database->getConnection();
        }

        public function getDivisionName($div_id){
            $div_name;
            $query = "SELECT div_name FROM division WHERE div_id='$div_id'";
            $result=$this->connection->query($query);
            if($result->num_rows > 0){
                $div_name_array=$result->fetch_assoc();
                $div_name=$div_name_array['div_name'];
            }
            return $div_name;
        }
    
    }

?>