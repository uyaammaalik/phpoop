<?php

class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "authboot";
    public $con;

    public function __construct(){
        $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $this->con;
    }

}

?>