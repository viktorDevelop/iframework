<?php
namespace core;

class Database {

    private static $instance;
    private $db;

    private function __construct()
    {
         $dbCon = 	include $_SERVER['DOCUMENT_ROOT'].'/config/Database.php';

         try{

             $this->db  = new \PDO('mysql:dbname='.$dbCon['db_name'].';host='.$dbCon['host'],$dbCon['user'],$dbCon['d']);
         }catch (\PDOException $e){
             echo $e->getMessage();
         }

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            $cl = __CLASS__;

            self::$instance = new $cl;
        }

        return self::$instance;
    }


    public function getConnect()
    {
        return $this->db;
    }

}