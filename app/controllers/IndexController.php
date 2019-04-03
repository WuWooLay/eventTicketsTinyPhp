<?php

/**
 *  Index Controller
 */

 class Index extends Dcontroller {

    /**
     * Call Load Model From D Controller Constructor
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

    public function home () {
        // echo " Home Content From Index Controller <br> ";
        $this->load->view('home');
    }

    public function getCat () {

        $CatModel = $this->load->model('catModel');
        $data["cat"] = $CatModel::All();

        $this->load->view('category', $data);

    }

 }