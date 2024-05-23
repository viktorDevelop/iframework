<?php
namespace core;

class Database {

    private static $instance;
    private $db;
    private $dbh;
    private $params = [];
    private function __construct()
    {
         $dbCon = 	include $_SERVER['DOCUMENT_ROOT'].'/config/Database.php';
         try{
             $this->db  = new \PDO('mysql:dbname='.$dbCon['db_name'].';host='.$dbCon['host'],$dbCon['user'],$dbCon['password']);
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


    public function query($sql,$params = [])
    {
        $this->params = $params;
        $this->dbh = $this->db->prepare($sql);
        return $this;

    }

    public function execute()
    {
        if ($this->params){
            $this->dbh->execute($this->params);
        }else{
            $this->dbh->execute();
        }
       return $this;

    }

    public function toObject()
    {
        return $this->dbh->fetchAll(\PDO::FETCH_OBJ);
    }

    public function toArray()
    {
        return $this->dbh->fetchAll(\PDO::FETCH_ASSOC);
    }
}