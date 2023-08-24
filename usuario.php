<?php

class User extends conexion
{

    public function getUser($username)
    {
        $sql = "SELECT * FROM login WHERE BINARY nombre = '$username'";

        $result = $this->connect()->query($sql);

        $numRows = $result->num_rows;
        if ($numRows == 1) {
            return true;
        }

        return false;
    }

    public function getStoredPassword($username)
    {
        $sql = "SELECT pass FROM login WHERE BINARY nombre = '$username'";
        $result = $this->connect()->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row['pass'];
        }

        return false;
    }
}

