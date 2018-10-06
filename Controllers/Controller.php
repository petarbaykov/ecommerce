<?php

/* 
 * BaseController
 */

namespace Ecommerce\Controllers;

use Ecommerce\App\View;
use Ecommerce\App\Redirect;
class Controller {
    
    
    public function __construct() {
        
    }
    

    public function auth() {
        if(!user()) {
            Redirect::to('login');
        }
    }
    
    public function view($name,$params = []) {
        $view = new View ();
        
        $view->render($name,$params);
    } 
}