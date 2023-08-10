<?php 

    class conexion{
        private $servername;
        private $user;
        private $password;
        private $dbname;

        public function __construct(){
            $this->servername = 'localhost';
            $this->user = 'root';
            $this->password = '';
            $this->dbname = 'fertilizante';
        }

        public function connect(){
            $conn = new mysqli($this->servername,$this->user,$this->password,$this->dbname);
            return $conn;
        }


    }