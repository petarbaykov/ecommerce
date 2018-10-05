<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\App;

class Session {
    
    public static function set ($key,$value) {
        $_SESSION[$key] = $value;
    }
    
    public static function get ($key) {
        return $_SESSION[$key];
    }
    
    public static function remove ($key) {
        unset($_SESSION[$key]);
    }
    
    public static function has ($key)  {
        if(isset($_SESSION[$key])) {
            return true;
        }
        return false;
    }
    
    public static function start () {
        session_start();
    }
    
    public static function destroy() {
        session_destroy();
    }
    
    public static function flash($key) {
        echo self::get($key);
        self::remove($key);
    }
} 