<?php

// PDO

class Database
{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbpassword = "password";
    private $dbname = "userdata";
    protected $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbserver};dbname={$this->dbname};charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT); // 持久連接
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword, $options);
        } catch (PDOException $e) {
            echo "Connection Error" . $e->getMessage();
        }
    }
}