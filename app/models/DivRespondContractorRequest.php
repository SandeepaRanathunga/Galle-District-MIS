<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DivRespondContractorRequest{

        private $connection;

        public function ___construct(){
            $this->connection=$this->dbConnect();
        }

        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

        public function getData($id){
            $result_arr=[];
            $query="SELECT * FROM contractor_request WHERE id='$id'";
            $result=$this->connection->query($query);
            print_r ($result);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $result_arr=[$row['id'],$row['view_status'],$row['approval_status'],$row['name'],$row['reg_no'],$row['specialized_field'],$row['office_address'],$row['contact_no'],$row['email'],$row['requested_date'],$row['div_id'],$row['document']];
                }
                return $result_arr;
            }
            return $result_arr;
        }

        public function approveRequest($id){
            $query="INSERT INTO contractor (name, reg_no, specialized_field, office_address, contact_no, approval_status, view_status) SELECT (name, reg_no, specialized_field, office_address, contact_no, email, 'approved', 'viewd') FROM contractor_request WHERE id = '$id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

        public function rejectRequest($id){
            $query="DELETE FROM contractor_request WHERE id='$id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }+

        public function updateViewStatus($id){
            $query="UPDATE contractor_request SET view_status='viewed' WHERE id='$id'";
            $result=$this->connection->query($query);
            if($this->connection->affected_rows > 0){
                return true;
            }
            return false;
        }

    }

?>