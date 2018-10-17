<?php
namespace Ecommerce\Controllers;
/* 
 * HomeController
 */




use Ecommerce\Controllers\Controller;
use Ecommerce\App\DB;
use Ecommerce\Models\Products;
use Ecommerce\App\Request;
use Ecommerce\Models\Categories;
class CategoriesController extends Controller {
    
    function __construct() {
       parent::__construct();
    }
    
    public function show($id) {
        
        return $this->view('categories/show');
    }
    
   
}