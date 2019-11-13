<?php
    include_once("utilities/db_access_helper.php");

    class Movie extends DatabaseAccessHelper{
        private $id = null;
        private $movie_title = null;
        private $movie_genre = null;
        private $theatre_id = null;
        private $movie_about = null;
        private $movie_cover = null;
        private $create_query = "INSERT INTO movie (Movie_Title, Movie_Genre, Theatre_ID, About_Movie, Movie_Cover) VALUES(?, ?, ?, ?, ?)";


        function __construct($movie_title='none', $theatre_id='none', $movie_about = 'none', $movie_genre = 'none', $movie_cover = 'none'){
			$this->movie_title = $movie_title;
            $this->theatre_id = $theatre_id;
            $this->movie_about = $movie_about;
            $this->movie_genre = $movie_genre;
            $this->movie_cover = $movie_cover;
            $this->connect();
        }

        function all_movies(){
            $queryString = "SELECT * from movie";

            $this->execute_query($queryString);

            return $this->get_query_result();
        }

        function all_movies_by_genre($genre){
            $queryString = "SELECT * FROM movie WHERE Movie_Genre='$genre'";

            $this->execute_query($queryString);

            return $this->get_query_result();
        }
        
        function create(){
            $query_statement = mysqli_prepare($this->connection, $this->create_query);
            if ($query_statement) {
                $query_statement->bind_param("ssiss", $this->movie_title, $this->movie_genre, $this->theatre_id, $this->movie_about, $this->movie_cover);

                $ret_val = $query_statement->execute();
                $this->id = $this->recently_generated_id();
                
                return $ret_val;
            }
            else {
                return "Error during insertion";
            }
        }
        
        function read(){
            
        }

        function update(){
            $queryString = "UPDATE movie SET Movie_Name='$this->movie_title', Theatre_ID='$this->theatre_id' ".
            "About_Movie='$this->movie_about', Movie_Genre='$this->movie_genre', Movie_Cover='$this->movie_cover".
            "WHERE Movie_ID='$this->id'";
        }

        function delete(){
            $queryString = "DELETE FROM movie WHERE Movie_ID='$this->id'";
			
			return $this->execute_query($queryString);
        }
    }
    
?>