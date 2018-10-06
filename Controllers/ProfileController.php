<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\Controllers;

use Ecommerce\Controllers\Controller;
use Ecommerce\App\Session;
use Ecommerce\App\Redirect;
class ProfileController extends Controller {
    
    public function __construct( ) {
        $this->auth();
    }
    
    public function index () {
        echo Session::get('user');
       
        echo 'profile';
    }
}