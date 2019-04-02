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
         * Token MiddleWare
         */
        // $token = isset($_GET['_token']) ? $_GET['_token'] : false;
        // if($token == false) {
        //     return die($this->json(['errors'=>$token], 400));
        // } 

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

    /** 
    * @route   /test/insertcat 
    * @desc    Insert Category
    */ 
    public function insertCat() {

        $errors = array();

        if(
            !isset($_POST['name']) ||
            !isset($_POST['title']))
        {
            // If Name And Title Null
            if (!isset($_POST['name'])) {
                $errors[] = "Name Field is Required";
            }
            if (!isset($_POST['title'])) {
                $errors[] = "Title Field is Required";
            }
            return die($this->json(["errors" => $errors], 400));
        }

        $data = [
            "name" => $_POST['name'],
            "title" => $_POST['title']
        ];
        
        // Call Test Model
        $TestModel = $this->load->model('testModel');
        $result = $TestModel->create($data);

        if($result["status"]) {
            return die($this->json($result));
        } else {
            return die($this->json(["errors" => "Cant Inserted!!"], 500));
        }
    }

    /** 
    * @route   /test/updateCat 
    * @param   {id} => $id from Route
    * @desc    Update Category
    */ 
    public function updateCat() {

        $data = [
            "name" => "name",
            "title" => "title"
        ];
        
        // Call Test Model
        $TestModel = $this->load->model('testModel');

        $cond = "id=1";

        $result = $TestModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => "Cant Updated"], 500));
        }
    }

    /** 
    * @route   /test/deleteCat 
    * @param   {id} => $id from Route
    * @desc    Delete Category
    */ 
    public function deleteCat() {
        // Call Test Model
        $TestModel = $this->load->model('testModel');
        $id = 16;
        $result = $TestModel->deleteById($id);
        
        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Deleted"]));
        } else {
            return die($this->json(["errors" => "Cant Deleted"], 500));
        }

    }

 }