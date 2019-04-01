<?php

/**
 *  Example Controller
 */

 class Example extends Dcontroller {
    
    /**
     * @desc Call Load Model From D Controller Constructor
     */
    function __construct() {
        parent::__construct();
    }


    /**
     * @desc If User Call Only Controller
     *       & We Don't Get Method And Params
     *       & Default Method is Index();
     */
    public function index() {
        return $this->load->view('home');
    }

 }