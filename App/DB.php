<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Ecommerce\App;


use PDO;

class DB {
    
    public static $connection = null;
    private static $config = null;
    public static $db = null;
    
    
    public function __construct() {
        self::$config = require 'config/config.php';
    }
    
    public function connect() {
        
        self::$connection = new PDO("mysql:host=localhost;dbname=".self::$config['db_name'],self::$config["db_user"],self::$config["db_password"]);
   
    
        self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	return self::$connection;
    }
    
    
}
