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
use Ecommerce\Models\User;
use Ecommerce\App\Validation;

class RegisterController extends Controller {
    
    public function index () {
       
        return $this->view('auth/register');
        
    }
    
    public function post () {
        $request = new Request;
        $request = $request->all();
        
        
        /*if(!isset($request['_token']) && !CSRFToken::compare($request['_token'])) {
        
            throw new \Exception("invalid token");
            return ;
        }*/
        
        
        $validator = new Validation();
        $validator->create($request, [
            'email'=>'required|email',
            'name'=>'required',
            'password'=>'required|min:6'
        ]);
        if($validator->validate()){
            echo "valid";
        }else{
            echo "invalid";
            echo $validator->wrongField;
        }
        exit;
         
         
        $user = new User;
        $user = $user->findByEmail($request['email']);
        
       
        
        
       
        
        
        
        Redirect::to("register");
    }
}
