<?php
    class Database{
        private $dbhost='localhost';
        private $username='root';
        private $password='';
        private $dbname='mis_db';
        private $connection=null;

        public function __construct(){
            $this->dbConnect();
        }
        
        private function dbConnect(){
            $this->connection=new mysqli($this->dbhost,$this->username,$this->password,$this->dbname);
            if($this->connection->connect_error){
                die("Connection to the database failed ".$this->connection->connect_error);
            }
             //echo "Database connected sucessfully!";
        }

        public function getConnection(){
            return $this->connection;
        }

/*
    public function runBaseQuery($query) {
		$resultset="";
        $result = $this->connection->query($query);   
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }

        public function runQuery($query, $param_type, $param_value_array){
            $sql= $this->connection->prepare($query);
            $this->bindQueryParams($sql, $param_type, $param_value_array);
            $sql = execute();
            $result = $sql->get_result();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $resultset = $row;
                }
            }

            if(!empty($resultset)){
                return $resultset;
            }
        }*/

        public function bindQueryParams($sql, $param_type, $param_value_array){
            $param_value_referrence[] = & $param_type;
            for($i=0; $i<count($param_value_array); $i++){
                $param_value_referrence[] = & $param_value_array[$i];
            } 
            call_user_func_array(array(
                $sql,
                'bind_param'
            ), $param_value_referrence);
        }
/*
        public function insert($query, $param_type, $param_value_array){
            $sql = $this->connection->prepare($query);
            $this->bindQueryParams($sql, $param_type, $param_value_array);
            $sql->execute();
            $insertId = $sql->$insert_id;
            return $insertId;
        }

        public function update($query, $param_type, $param_value_array){
            $sql = $this->connection->prepareQuery($query);
            $this->bindQueryParams($sql, $param_type, $param_value_array);
            $sql->execute();
        }
*/
    }
?>