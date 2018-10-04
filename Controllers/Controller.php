<?php

/* 
 * BaseController
 */

namespace Ecommerce\Controllers;

use Ecommerce\App\View;

class Controller {
    
    
    public function __construct() {
        
    }
    

    public function view($name,$params = []) {
        $view = new View ();
        
        $view->render($name,$params);
    } 
}