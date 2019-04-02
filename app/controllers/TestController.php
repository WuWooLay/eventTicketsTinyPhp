<?php

/**
 *  Test Controller
 */

 class Test extends Dcontroller {
    
    /**
     * @desc    Call Load Model From D Controller Constructor
     * @desc    Load -> View & Model Works parent::__construt()
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * @desc    If User Call Only Controller
     *          & We Don't Get Method And Params
     *          & Default Method is Index();
     */
    public function index() {
         echo " Testing Controller And View!!! ";
         return ;
    }

    /** 
     * @route   /test/getcat 
     * @route   /test/getcat/{id} 
     * 
     * @param   {id} => $id from Route
     * @desc    Test Model Calling
     */ 
    public function getCat($id = false) {

        // Call Test Model
        $TestModel = $this->load->model('testModel');

        /**
         *  @desc   If {id} is not Null
         */
        if($id) {
            
            $data["category"] = $TestModel->findById($id);

            if(!($data["category"])) {

                return die($this->json(['errors'=>'Cant Found'], 400));

            } else{

                return die($this->json($data));

            }
            
        } else {
            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             */

            $data["category"] = $TestModel->All();

            return die($this->json($data));
           
            // $this->load->view('category', $data);
        }

        
    }

 }