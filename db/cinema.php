<?php
    include_once("utilities/db_access_helper.php");

    class Cinema extends DatabaseAccessHelper{
        private $id = null;
        private $cinema_name = null;
        private $cinema_address = null;
        private $cinema_telephone = null;
        private $cinema_email = null;
        private $create_query = "INSERT INTO cinema (Cinema_Name, Cinema_Address, Cinema_Telephone, Cinema_Email) VALUES (?, ?, ?, ?)";

        // INSERT INTO `cinema` (`Cinema_ID`, `Cinema_Name`, `Cinema_Address`, `Cinema_Telephone`, `Cinema_Email`) VALUES (NULL, 'Bronzefalcon', 'School Rd', '0238981217', 'bronzeFalcon@flick.cin.com');

        function __construct($cinema_name='none', $cinema_address='none', $cinema_telephone='none', $cinema_email='none'){
            parent::__construct();
			$this->cinema_name = $cinema_name;
            $this->cinema_address = $cinema_address;
            $this->cinema_telephone = $cinema_telephone;
            $this->cinema_email = $cinema_email;
        }

        function all_cinema(){
            $queryString = "SELECT * from cinema";

            $this->execute_query($queryString);

            return $this->get_query_result();
        }
        
        function create(){
            $query_statement = mysqli_prepare($this->connection, $this->create_query);
            if ($query_statement) {
                $query_statement->bind_param("ssss", $this->cinema_name, $this->cinema_address, $this->cinema_telephone, $this->cinema_email);

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
            $queryString = "UPDATE movie SET Cinema_Name='$this->cinema_name', Cinema_Address='$this->cinema_address', ".
            "Cinema_Telephone='$this->cinema_telephone', Cinema_Email='$this->cinema_email'";
        }

        function delete(){
            $queryString = "DELETE FROM cinema WHERE Cinema_ID='$this->id'";
			
			return $this->execute_query($queryString);
        }
    }
    
?>