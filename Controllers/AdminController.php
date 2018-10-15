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
use Ecommerce\App\CSRFToken;
use Ecommerce\Models\Categories;

class AdminController extends Controller {
    
    private $CategoryModel = null;
    
    public function __construct() {
        $this->auth();
        $this->admin();
        $this->CategoryModel = new Categories();
    }
    
    public function index () {
        
        
        $categories = $this->CategoryModel->all();
        $this->view('admin/index',[
            'categories'=>$categories
        ]);
    }
    
    public function add_product() {
        $req = new Request();
        $request = $req->all();
        
        if(!isset($request['_token']) && !CSRFToken::compare($request['_token'])) {
        
            throw new \Exception("invalid token");
            return ;
        }
        
        $validator = new Validation();
        $validator->create($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        
        if($validator->validate('admin')) {
            $product = new Products();
            
            if($req->hasFile('image')){
               
                $path = $req->file('image')['name'];
                $ext = pathinfo($path,PATHINFO_EXTENSION);
                
                $destination = __DIR__."../assets/product_images/".$path;
               
                if($ext == "jpg" || $ext == "png"){
                    move_uploaded_file($path, $destination);
                }
                exit;
            }
            $product->insert($request); 
            Session::set('admin-msg',trans('admin.addMsg'));
            
            
        }else{
            Session::set('admin-err',trans($validator->wrongField));
        }
            
        
        
        return Redirect::to('admin');
        
        
       
    }
    
    public function categories() {
        
        
       return $this->view('admin/categories');
    }
    
    
    public function addCategory() {
        
        $request = new Request();
        $request = $request->all(); 
        
        if(!isset($request['_token']) && !CSRFToken::compare($request['_token'])) {
        
            throw new \Exception("invalid token");
            return ;
        }
        
        
        $validator = new Validation();
        $validator->create($request,[
            'name'=>'required',
            'description'=>'required'
        ]);
        
        if($validator->validate('admin')) {
            $category = new Categories();
            $category->insert($request); 
            
            Session::set('admin-msg',trans('admin.categoryMsg'));
            
            
        }else{
            Session::set('admin-err',trans($validator->wrongField));
        }
        
        
        return Redirect::to('admin/categories'); 
    }
}