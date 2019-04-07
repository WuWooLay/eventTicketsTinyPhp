<?php

/**
 *  Role Controller
 */

 class Role extends Dcontroller {
    
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
         return ;
    }

    /** 
     * @route   /test/getcat 
     * @route   /test/getcat/{id} 
     * 
     * @param   {id} => $id from Route
     * @desc    Test Model Calling
     */ 
    public function get($id = false) {

        // Call Test Model
        $RoleModel = $this->load->model('roleModel');

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
            
            $data["data"] = $RoleModel->findById($id, [
                "id", "name"
            ]);

            if(!($data["data"])) {

                return die($this->json(['errors'=>'Cant Found'], 400));

            } else{

                return die($this->json($data));

            }
            
        } else {
            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             */
            $page_no = Page::getPage();
            $total_page = $this->pageCount([
                "table" => "role",
                "cond" => " WHERE `deleted_at` IS NULL",
                "limit" => "",
                "model" => $RoleModel
            ]);
            $select = [
                "id", "name"
            ];

            $result = $RoleModel->All($select, $page_no);

            $data["category"] = $result;

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];
            
            if(!count($data["data"])) {
                return die($this->json(["errors"=> "Cant Count!~!"]));
            }
            return die($this->json($data));
           
            // $this->load->view('category', $data);
        }
        
    }

    /** 
    * @route   /test/insert 
    * @desc    Insert Category
    */ 
    public function insert() {

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
        $RoleModel = $this->load->model('roleModel');
        $result = $RoleModel->create($data);

        if($result["status"]) {
            return die($this->json($result));
        } else {
            return die($this->json(["errors" => "Cant Inserted!!"], 500));
        }
    }

    /** 
    * @route   /test/update
    * @param   {id} => $id from Route
    * @desc    Update Category
    */ 
    public function update() {

        $data = [
            "name" => $_POST['name'],
            "title" => $_POST['title']
        ];
        
        // Call Test Model
        $RoleModel = $this->load->model('roleModel');

        $cond = "id=" . $_POST["id"];

        $result = $RoleModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => "Cant Updated"], 500));
        }
    }

    /** 
    * @route   /test/delete
    * @param   {id} => $id from Route
    * @desc    Delete Category
    */ 
    public function delete() {
        // Call Test Model
        $RoleModel = $this->load->model('roleModel');
        $id = $_POST["id"];
        $result = $RoleModel->deleteById($id);
        
        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Deleted"]));
        } else {
            return die($this->json(["errors" => "Cant Deleted"], 500));
        }

    }

    /**
     * @route   /test/pageCount
     * @param   arr = [
     *          "table" => "test",
     *          "cond" => " WHERE `deleted_at` IS NULL",
     *          "limit" => "",
     *          "model" => $RoleModel
     *          ]
     */
    public function pageCount($arr = ["table" => "testing_table","cond" => "cond","limit" => "", "model" => "roleModel"]) {
       
        $table = $arr["table"];
        $cond = "";
        $limit = "";
        
        if(isset($arr["cond"])) {
            $cond = $arr["cond"];
        }
        if(isset($arr["limit"])) {
            $limit = $arr["limit"];
        }
        if(isset($arr["model"]) && $arr["model"] != "") {
            $userModel = $arr["model"];
        } else {
            $userModel = $this->load->model("roleModel");
        }

        return ($userModel->pageCount($table, $cond, $limit));
    }
 }