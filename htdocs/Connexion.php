<?php

class Connexion
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'L3';
    const DB_USER = 'root';
    const DB_PASS = '';
    private $PDOInstance = null;



    public function __construct()
    {
        $this->PDOInstance = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
        $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(){
        return self::$instance;
    }

    public function getDbh()
    {
        return $this->db;
    }

    // TODO retourner instance de PDO
    // Ca doit etre singleton
}