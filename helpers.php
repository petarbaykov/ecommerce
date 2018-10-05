<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pretty_log ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function csrf_field() {
    echo "<input type='hidden' name='_token' value='" . \Ecommerce\App\CSRFToken::get() ."' />";
}


function asset($url) {
    global $config;
    return $config["app_url"] . $url;
}
 


function trans ($key) {
    $key = explode(".",$key);
    $trans = require 'lang/' . $_SESSION["locale"] . '/'. $key[0] . '.php' ;
    
    return $trans[$key[1]];
}