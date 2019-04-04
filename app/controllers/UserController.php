<?php

/**
 *  User Controller
 */

 class User extends Dcontroller {
    
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
         $this->get();
         return die("");
    }

    /** 
     * @route   /user/get 
     * @route   /user/get/{id} 
     * 
     * @param   {id} => $id from Route
     * @desc    User Model Calling
     */ 
    public function get($id = false) {

        // Call User Model
        $userModel = $this->load->model('userModel');

        /**
         *  @desc   If {id} is not Null
         */
        if($id) {
            
            $data["user"] = $userModel->findById($id);

            if(!($data["user"])) {

                return die($this->json(['errors'=>'Cant Found'], 400));

            } else{

                return die($this->json($data));

            }
            
        } else {

            $page_no = Page::getPage();
            $total_page = $this->pageCount($userModel);

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "id", "name", "email", "address", "image", "phone", "role_id"
            ];

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "user" => $userModel->All($select, $page_no)
            ];

            if(!count($data["user"])) {
                return die($this->json(["errors"=> "Cant Count!~!"]));
            }

            return die($this->json($data));
           
        }
        
    }

    /** 
    * @route   /user/insert 
    * @desc    Insert User
    */ 
    public function insert() {

        $resultError = Validation::UserInput();
        
        if(!$resultError["isValid"]) {
            return die($this->json($resultError, 400));
        }

        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "phone" => $_POST['phone']
        ];
        
        // Call User Model
        $userModel = $this->load->model('userModel');
        $result = $userModel->create($data);

        if($result["status"]) {
            unset($result["data"]["passsword"]);
            return die($this->json($result));
        } else {
            return die($this->json(["errors" => "Cant Inserted!!"], 500));
        }
    }

    /** 
    * @route   /user/update
    * @param   {id} => $id from Route
    * @desc    Update User
    */ 
    public function update() {

        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone']
        ];
        
        // Call User Model
        $userModel = $this->load->model('userModel');

        $cond = "id=" . $_POST["id"];

        $result = $userModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => "Cant Updated"], 500));
        }
    }

    /** 
    * @route   /user/delete
    * @param   {id} => $id from Route
    * @desc    Delete User
    */ 
    public function delete() {
        // Call User Model
        $userModel = $this->load->model('userModel');
        $id = $_POST["id"];
        $result = $userModel->deleteById($id);
        
        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Deleted"]));
        } else {
            return die($this->json(["errors" => "Cant Deleted"], 500));
        }

    }

    /**
     * @route   /user/pageCount
     */
    public  function pageCount($userModel = '') {
        if($userModel === '') {
            $userModel = $this->load->model('userModel');
        }
        return ($userModel->pageCount());
    }
 }