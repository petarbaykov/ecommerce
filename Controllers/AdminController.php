<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\Controllers;

use Ecommerce\Controllers\Controller;
use Ecommerce\App\Request;
use Ecommerce\Models\Products;
use Ecommerce\App\Validation;
use Ecommerce\App\Session;
use Ecommerce\App\Redirect;
class AdminController extends Controller {
    
    public function __construct() {
        $this->auth();
        $this->admin();
    }
    
    public function index () {
        
        $this->view('admin/index');
    }
    
    public function add_product() {
        $request = new Request();
        $request = $request->all();
        
        
        $validator = new Validation();
        $validator->create($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        
        if($validator->validate('admin')) {
            $product = new Products();
            $product->insert($request); 
            
            Session::set('admin-msg',trans('admin.addMsg'));
            
            
        }else{
            Session::set('admin-err',trans($validator->wrongField));
        }
            
        
        
        return Redirect::to('admin');
        
        
       
    }
}