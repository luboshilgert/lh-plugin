<?php
namespace LHPlugin\Base;
use LHPlugin\Base\Database;

class Activate{
    
    public static function activate(){
        $database = new Database();
        $database->createTables();
        
    }
    
}
