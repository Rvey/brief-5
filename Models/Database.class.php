<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'booking';
    private $usr = 'root';
    private $pwd = '';

    public function connect(){

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->usr, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}