<?php

class Database {
    private string $servername;
    private string $username;
    private string $password;
    private string $dbname;

    private mysqli $connection;

    public function __construct(){
        $this->servername = "localhost"; //localhos:3306
        $this->username = "root"; //localhos:3306
        $this->password = ""; //localhos:3306
        $this->dbname = "pw_example"; //localhos:3306
        
    }

    public function openConnection()
    {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->connection->close();
    }

    public function executeSelect(string $sql): array {
        $this->openConnection();
        $result = $this->connection->query($sql);

        $array =  array();
        while($row = $result->fetch_assoc()){
            array_push($array, $row);
        }
        $this->closeConnection();
        return $array;
    }

    public function insert(string $sql) {
        $this->openConnection();
        $result = $this->connection->query($sql);
        $this->closeConnection();
    }
}    