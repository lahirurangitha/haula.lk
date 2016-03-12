<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 3/11/2016
 * Time: 9:04 PM
 */

class Paypal {

    private $_db,
            $_paypalurl,
            $_sellerurl,
            $_products = array();

    public function __construct() {
        $this->_db = DB::getInstance();


    }



}