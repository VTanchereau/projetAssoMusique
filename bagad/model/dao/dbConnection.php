<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 10:06
 */

namespace bagadlag\model\dao;


class dbConnection
{
    private $db;

    private static $user = "root";
    private static $pass = "root";
    private static $dbName = "bagad";
    private static $host = "localhost";
    private static $port = "3307";


    private static $instance;

    /**
     * dbConnection constructor.
     */
    private function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host='.self::$host.';dbname='.self::$dbName.';port='.self::$port.';charset=utf8', self::$user, self::$pass);
        } catch (\PDOException $e) {
            error_log('Fail to connect to data base. error : ' .$e);
        }
    }

    public static function getInstance() {
        if (! self::$instance instanceof self) self::$instance = new self();
        return self::$instance;
    }

    public function getDB(){
        return $this->db;
    }
}