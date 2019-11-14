<?php
    include_once("utilities/db_access_helper.php");

    class Theatre extends DatabaseAccessHelper{
        private $id = null;
        private $theatre_name = null;
        private $cinema_id = null;
        private $create_query = "INSERT INTO theatre (Theatre_Name, Cinema_ID) VALUES (?, ?)";

        function __construct($theatre_name='none', $cinema_id='none'){
            parent::__construct();
			$this->theatre_name = $theatre_name;
            $this->cinema_id = $cinema_id;
        }

        function all_theatre(){
            $queryString = "SELECT * from theatre";

            $this->execute_query($queryString);

            return $this->get_query_result();
        }
        
        function create(){
            $query_statement = mysqli_prepare($this->connection, $this->create_query);
            if ($query_statement) {
                $query_statement->bind_param("si", $this->theatre_name, $this->cinema_id);

                $ret_val = $query_statement->execute();
                $this->id = $this->recently_generated_id();
                
                $query_statement->close();
                return $ret_val;
            }
            else {
                return "Error during insertion";
            }
        }
        
        function read(){

        }

        function update(){
            $queryString = "UPDATE movie SET Theatre_Name='$this->theatre_name', Theatre_ID='$this->theatre_id', ".
            "Cinema_ID='$this->cinema_id' WHERE Theatre_ID='$this->id'";
        }

        function delete(){
            $queryString = "DELETE FROM theatre WHERE Theatre_ID='$this->id'";
			
			return $this->execute_query($queryString);
        }
    }
    
?>