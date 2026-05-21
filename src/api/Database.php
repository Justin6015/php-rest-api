<?php

class Database {
    public function __construct(private string $host, 
                                private string $username, 
                                private string $password, 
                                private string $database) 
    {}
    
    public function getConnection(): PDO {
        $dsn = "mysql:host=$this->host;dbname=$this->database;charset=utf8mb4";

        return new PDO($dsn, $this->username, $this->password);
    }
}

?>
