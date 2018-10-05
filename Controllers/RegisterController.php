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
        if($validator->validate('register')){
            $user = new User;
            $checkUser = $user->findByEmail($request['email']);
           
            
            
            
            if($checkUser) {
                Session::set('register',trans('register.user_exists'));
                return Redirect::to("register");
            }
            
            
            $user->insert($request);
            
        }else{
            Session::set('register',trans($validator->wrongField));
            return Redirect::to("register");
        }
       
         
         
        
        
       
        
        
       
        
        
        
        Redirect::to("profile");
    }
}
