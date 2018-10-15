<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\Models;

use Ecommerce\Models\BaseModel;


class Products extends BaseModel {
    
    
    public  $table = "products";
    
    function __construct (){
        parent::__construct($this->table);
    }
    
    
    public function insert($data) {
        unset($data['_token']);
        return parent::insert($data);
    }
   
}