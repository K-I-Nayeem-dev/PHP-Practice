<?php

class Database{

    private $db_server = 'localhost';
    private $db_username = 'root';
    private $db_password = '';
    private $db_name = 'php';
    private $mysqli = '';
    private $conn = false;
    private $result = array();
    

    // Database Connection Start.....

    public function __construct()
    {   
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_server,$this->db_username,$this->db_password,$this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array($this->result, $this->mysqli->connect_error);
                return true;
            }
        }
        else{
            return true;
        }

    }

    // Function to insert into the database
    public function insert($table, $params=array())
    {   
        //Check to see if table Exist
        if($this->tableExists($table)){
            $table_colums = implode(',' , array_keys($params));
            $table_values = implode("','", $params);

            // Make the Query to insert to the database
            $sql = "INSERT INTO $table ($table_colums) VALUES ('$table_values')";
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->insert_id);
                return true; // The data has been inserted
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false; // the data has not been inseted
            }
        }
        else{
            return false; // Table Dose not exist
        }

    }
    
    
    // Function to Select From Database 
    public function select($table, $row="*", $join=null, $where=null, $order=null, $limit=null)
    {   
        if($this->tableExists($table)){

            $sql = "SELECT $row FROM $table ";

            if($join != null){
                $sql .= " JOIN $join" ;
            }

            if($where != null){
                $sql .= " WHERE $where";
            }

            if($order != null){
                $sql .= " ORDER BY $order";
            }

            if($limit != null){
                $sql .= " LIMIT 0,$limit";
            }

            $query = $this->mysqli->query($sql);

            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true; 
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }
            
        }
    }
    

    // Function To Select Row code in Object 

    public function sql($sql){

        $query = $this->mysqli->query($sql);

        if($query){
            $all = $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
            print_r($all);
        }
        else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }

    }


    // Function to Update Row in database
    public function update($table, $params=array(), $where = null)
    {   
        //Check to see if table Exist
        if($this->tableExists($table)){

            // echo "<pre>";
            // print_r($params);
            // echo "</pre>";

            // For Value Separete in this [Name] => 'Elon Mask' to this  [0] => Name = 'Elon Mask';
            $args = array();
            foreach ($params as $key => $value) {
              $args[] = "$key = '$value'";
            }
            // echo "<pre>";
            // print_r($args);
            // echo "</pre>";
            
            // echo "<pre>";
            // mySql Query to update database
            $sql = "UPDATE $table SET " . implode(', ' , $args);
            // echo "</pre>";
            if($where != null){
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows); 
                // Updated Value Done .....
            }
            else{
                array_push($this->result, $this->mysqli->error); 
                // Updated Value Not Done .....
            }
        }
        else{
            //Check to see if table Not Exist
            return false;
        }
    }
    
    // Function ot Delete Table or Row(s) from Database
    public function delete($table, $where = null)
    {   
        if($this->tableExists($table)){

            $sql = "DELETE FROM $table ";
            if($where != null){
                $sql .= " WHERE $where";
            }
            // print_r($sql);
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows);
            }
            else{
                array_push($this->result, $this->mysqli->error);
            }

        }
        else{
            return false;  
        }
    }

    // Common User Database Check 
    private function tableExists($table){

        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";

        $tableInDb = $this->mysqli->query($sql);
        
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }
            else{
                array_push($this->result , $table . " dose Not Exist in Database");
                return false;
            }
        }
    }

    // Get Result 
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    //Close Connection
    public function __destruct()
    {
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }


}