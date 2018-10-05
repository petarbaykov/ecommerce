<?php
namespace Ecommerce\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Ecommerce\Controllers\Controller;
use Ecommerce\App\DB;
use Ecommerce\Models\Products;
use Ecommerce\App\Request;
use Ecommerce\App\Redirect;
use Ecommerce\App\CSRFToken;
class PostController extends Controller {
    
    public function create () {
        $request = new Request;
        $request = $request->all();
        if(!isset($request['_token']) && !CSRFToken::compare($request['_token'])) {
        
            throw new \Exception("invalid token");
            return ;
        }
        
       
        Redirect::to('test');
    }
}