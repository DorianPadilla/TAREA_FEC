<?php 

    class User extends conexion{

        public function getUser($username, $password){
            $sql = "SELECT * FROM login WHERE correo = '$username' AND pass ='$password'";

            $result = $this->connect()->query($sql);

            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }

            return false;
        }

    }