<?php
    class Database {
        //number variables
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "Database";

        /**
         * these number variables are on private so that other files cann't accdess these
         * variables. It is also for secuiuty purposes
         */

        public $conn;
        //Constructor
        //this will construct the connection
        public function __construct(){
            //this variable points at itself
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            if($this->conn->connect_error){
                die("Connection Error:". $this->conn->connect_error);
            }
            return $this->conn;
        }
    }
?>