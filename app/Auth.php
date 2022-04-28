<?php

class Auth
{
    protected $database;
    protected $tabel;

    public function __construct()
    {
        require_once('Database.php');
        $this->tabel = 'pegawai';
        $this->database = new Database;
    }

    protected function login($username, $password)
    {
        
    }

    protected function test()
    {
        return $this->database;
    }
}