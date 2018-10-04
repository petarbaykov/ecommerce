<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\App;

class Redirect {
    
    public static function to ($path) {
        header ("Location: " . $_SERVER['HTTP_REFERER'] . $path); 
        exit();
    }
}
