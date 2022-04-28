<?php

class Database
{
    private $connection;
    private $db;

    function __construct()
    {
        $this->db_connect();
    }

    private function db_connect()
    {
        $this->connection = @mysql_connect(getenv('DB_HOST'), getenv('DB_USERNAME'), getenv('DB_PASSWORD')) or die('Tidak Terkoneksi');
        
        $this->db = @mysql_select_db(getenv('DB_DATABASE')) or die ('Database Tidak Ditemukan');
        
        return $this->connection;
    }

    protected function db_dump(String $sql)
    {
        return $this->connection->query($sql);
    }

    protected function getConnection()
    {
        return $this->connection;
    }
    
    protected function getDatabase()
    {
        return $this->db;
    }
}