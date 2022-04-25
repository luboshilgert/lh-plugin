<?php

namespace LHPlugin\Utils;
use LHPlugin\Base\Database;

class Utils{
    private $database;
    public function __construct() {
        $this->database = new Database();
    }
    public function generateCode(){      
        $code = substr(md5(microtime()), rand(0, 26), 8);
        if ($this->database->checkCode($code)) {
            $this->generateCode();
        }
        return $code;
    }
}