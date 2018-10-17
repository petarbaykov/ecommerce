<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\App;

use Ecommerce\Models\User;
use Ecommerce\App\Session;

/**
 * Class for the base Auth
 */
class Auth {
    
    
    
    public static function user() {
        $user = null;
        if(Session::has('user')) {
            $user = new User();
            $user = $user->find(Session::get('user'));
        }
        return $user;
    }
}