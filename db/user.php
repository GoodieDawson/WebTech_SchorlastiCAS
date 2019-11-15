<?php
    include_once("utilities/db_access_helper.php");

    class user extends DatabaseAccessHelper {
        private $id = null;
        private $user_name = null;
        private $user_password = null;
        private $user_email = null;
        private $create_query = "INSERT INTO user (User_Name, User_Password, Email_Address) VALUES (?, ?, ?)";

        function __construct($user_name='none', $user_password='none', $user_email='none'){
            parent::__construct();
			$this->user_name = $user_name;
            $this->user_password = $user_password;
            $this->user_email = $user_email;
            $this->connect();
        }

        function create(){
            $query_statement = mysqli_prepare($this->connection, $this->create_query);

            if ($query_statement) {
                
                $query_statement->bind_param("sss", $this->user_name, $this->user_password, $this->user_email);
                
                $ret_val = $query_statement->execute();
                
                $this->id = $this->recently_generated_id();
                
                $query_statement->close();
                return $ret_val;
            }
            else {
                return "Error during insertion";
            }
        }
    }

?>