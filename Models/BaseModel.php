<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\Models;
 use Ecommerce\App\DB;

class BaseModel {
    
    public  $db = null;
    public $table = null;
    public function __construct($table) {
       
        $this->db = new DB;
       
        $this->db = $this->db->connect();
        $this->table = $table;
        
    }
    
    public function all () {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $stmt = $stmt->fetchAll();
        return $stmt;
    }
    
    public function find ($id) {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id=?");
        $stmt->execute([$id]);
        $stmt = $stmt->fetch();
        return $stmt;
    }
}