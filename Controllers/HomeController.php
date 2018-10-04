<?php
namespace Ecommerce\Controllers;
/* 
 * HomeController
 */




use Ecommerce\Controllers\Controller;
use Ecommerce\App\DB;
use Ecommerce\Models\Products;
use Ecommerce\App\Request;

class HomeController extends Controller {
    
    function __construct() {
       parent::__construct();
    }
    
    public $name = "asd";
    
    function index () {
       $request = new Request;
       $request = $request->all();
       var_dump($request);
       $products = new Products;
       
       
       $one = $products->find(1);
       
       return $this->view("home/home");
       
    }
    
   
}