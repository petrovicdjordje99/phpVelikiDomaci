<?php
 
class Database{
   
    private static  $instance;
    public $conn;
    
    private function __construct($database)
    {
        require 'config.php';
        $this->conn=new mysqli($host,$user,$pass,$database,$port);

    }

    public static function getInstance(){
        if(self::$instance==null)  self::$instance=new Database(database:"filmapp");
        return self::$instance;
    }
}