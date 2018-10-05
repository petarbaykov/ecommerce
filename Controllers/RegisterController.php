<?php

/* 
 * Register Controller
 * 
 */

namespace Ecommerce\Controllers;

use Ecommerce\Controllers\Controller;
use Ecommerce\App\Request;
use Ecommerce\App\Redirect;
use Ecommerce\App\CSRFToken;
use Ecommerce\App\Session;

class RegisterController extends Controller {
    
    public function index () {
       
        return $this->view('auth/register');
        
    }
    
    public function post () {
        $request = new Request;
        $request = $request->all();
        
        
        if(!isset($request['_token']) && !CSRFToken::compare($request['_token'])) {
        
            throw new \Exception("invalid token");
            return ;
        }
        
        Session::set('register','Success');
        
        var_dump($request);
        exit;
        
        Redirect::to("register");
    }
}
