<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Ecommerce\Controllers;

use Ecommerce\Controllers\Controller;


class ErrorController extends Controller {
    public function index (){
        
        return $this->view('404');
    }
}

