<?php
    include_once("utilities/db_access_helper.php");

    class user extends DatabaseAccessHelper {
        private $id = null;
        private $user_name = null;
        private $user_password = null;
        private $first_name = null;
        private $last_name = null;
        private $gender = null;
        private $date_of_birth = null;
        private $address = null;
        private $user_email = null;
        private $contact_number = null;
        private $create_query = "INSERT INTO user (User_Name, User_Password, First_Name, Last_Name, Gender, Date_of_Birth, Address, Email_Address, Contact_Number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        function __construct($user_name='none', $user_password='none', $first_name='none', $last_name='none', $gender='none', $date_of_birth='none', $address='none', $user_email='none', $contact_number='none'){
            parent::__construct();
			$this->user_name = $user_name;
            $this->user_password = $user_password;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->gender = $gender;
            $this->date_of_birth = $date_of_birth;
            $this->address = $address;
            $this->user_email = $user_email;
            $this->contact_number = $contact_number;
            $this->connect();
        }

        function create(){
            $query_statement = mysqli_prepare($this->connection, $this->create_query);

            if ($query_statement) {
                
                $query_statement->bind_param("sssssssss", $this->user_name, $this->user_password, $this->first_name, $this->last_name, $this->gender, $this->date_of_birth, $this->address, $this->user_email, $this->contact_number);
                
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