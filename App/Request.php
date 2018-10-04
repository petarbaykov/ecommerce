<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\App;

class Request {
    
    function __construct() {
       
    }
    
    public function all() {
      
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            return $_GET;
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            return $_POST;
        }
    }
}