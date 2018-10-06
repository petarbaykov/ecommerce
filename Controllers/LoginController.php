<?php

/* 
 * Login Controller
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

class LoginController extends Controller {
    
    public function index () {
       
        return $this->view('auth/login');
        
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
            'password'=>'required|min:6'
        ]);
        if($validator->validate('login')){
            $user = new User;
            $checkUser = $user->findByEmail($request['email']);
           
            
            
            
            if($checkUser) {
               if($checkUser['password'] == md5($request['password'])) {
                   Session::set('user',$checkUser['id']);
                   return Redirect::to('profile');
               }
            }
            
            
           
            
            
            
        }else{
            Session::set('login',trans($validator->wrongField));
            return Redirect::to("login");
        }
       
         
         
        
        
       
        
        
       
        
        
        
        Redirect::to("profile");
    }
    
}