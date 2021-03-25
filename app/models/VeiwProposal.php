<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class ViewProposal{

        private $connection;

        public function __construct(){
            $this->connection=$this->dbConnect();
        }
        private function dbConnect(){
            $database=new \Database();
            return $database->getConnection();
        }

    }
?>