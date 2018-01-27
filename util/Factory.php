<?php

class Factory
{
    var $user;
    var $password;
    var $database;
    var $server;


    public function Factory()
    {
        $this->user = "root";
        $this->password = "";
        $this->database = "vila_vicentina";
        $this->server = "localhost";
    }

    public function getConnection()
    {
        $con = new PDO("mysql:host=$this->server;dbname=$this->database;charset=UTF8",
            $this->user,
            $this->password);

        return $con;
    }

}

?>
