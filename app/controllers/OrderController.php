<?php

/**
 *  Order Controller
 */

 class Order extends Dcontroller {
    
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
        return $this->get();
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
        $orderModel = $this->load->model('orderModel');

        /**
         *  @desc   If {id} is not Null
         */
        if($id) {

            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];
            
            $data["data"] = $orderModel->findById($id, $select)[0];

            if(!($data["data"])) {

                return die($this->json(['errors'=>['Cant Found']], 400));

            } 


            return die($this->json($data));
            
        } else {

            $page_no = Page::getPage();

            $total_page = $this->pageCount([
                "table" => "orders",
                "cond" => "",
                "limit" => "",
                "model" => $orderModel
            ]);
            

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];

            $result = $orderModel->All($select, $page_no);


            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];

            if(!count($data["data"])) {
                return die($this->json(["errors"=> ["Cant Count!~!"]]));
            }

            return die($this->json($data));
           
        }
        
    }

    /**
     * 
     * @route /orders/user
     * 
     */
    public function getByUserId($id = false) {
        $resultError = Validation::ordersUserId();
        
        if(!$resultError["isValid"]) {
            return die($this->json($resultError, 400));
        }

            $orderModel = $this->load->model('orderModel');

            $page_no = Page::getPage();

            $total_page = $this->pageCount([
                "table" => "orders",
                "cond" => " WHERE user_id = " . $_POST["id"],
                "limit" => "",
                "model" => $orderModel
            ]);
            

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];

            $result =  $orderModel->getByUserId($select, $_POST["id"], $page_no);

            if(!count($result)) {
                return die($this->json(["errors"=> ["Cant Count!~!"]]));
            }

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];

           
            return die($this->json($data));
    }


    /**
     * Get By Pending
     */
    public function getByPending() {

            $orderModel = $this->load->model('orderModel');

            $page_no = Page::getPage();
            $status = 1;
            $total_page = $this->pageCount([
                "table" => "orders",
                "cond" => " WHERE status = $status",
                "limit" => "",
                "model" => $orderModel
            ]);
            

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];

            $result =  $orderModel->getByPendingStatus($select, $status, $page_no);

            if(!count($result)) {
                return die($this->json(["errors"=> ["Cant Count!~!"]]));
            }

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];

        
            return die($this->json($data));
    }

    /**
     * Get By Pending
     */
    public function getByReject() {

            $orderModel = $this->load->model('orderModel');

            $page_no = Page::getPage();
            $status = 3;
            $total_page = $this->pageCount([
                "table" => "orders",
                "cond" => " WHERE status = $status",
                "limit" => "",
                "model" => $orderModel
            ]);
            

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];

            $result =  $orderModel->getByPendingStatus($select, $status, $page_no);

            if(!count($result)) {
                return die($this->json(["errors"=> ["Cant Count!~!"]]));
            }

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];

        
            return die($this->json($data));
    }

    /**
     * Get By Success
     */
    public function getBySuccess() {

            $orderModel = $this->load->model('orderModel');

            $page_no = Page::getPage();
            $status = 2;
            $total_page = $this->pageCount([
                "table" => "orders",
                "cond" => " WHERE status = $status",
                "limit" => "",
                "model" => $orderModel
            ]);
            

            /**
             * @desc    {id} param doesnt get
             * @desc    show All Datas
             * @param select to pick from DB
             */
            $select = [
                "orders.id",
                "orders.image",
                "orders.status",
                "orders.ga",
                "orders.ga_price",
                "orders.ga_quantity",
                "orders.vip","orders.vip_price",
                "orders.vip_quantity","orders.vvip",
                "orders.vvip_price","orders.vvip_quantity",
                "orders.user_id",
                "user.name as user_name",
                "user.phone as user_phone",
                "user.image as user_image",
                "ticket.title as ticket_title",
                "order_status.name as status_name",
            ];

            $result =  $orderModel->getByPendingStatus($select, $status, $page_no);

            if(!count($result)) {
                return die($this->json(["errors"=> ["Cant Count!~!"]]));
            }

            $data = [
                "total_page" => $total_page,
                "current_page" => (int)$page_no,
                "data" => $result
            ];

        
            return die($this->json($data));
    }


    /**
     * 
     * Update To Confirm status
     * 
     */
    public function updateConfirm($id = null) {
        if($id == null || $id == '' || $id == 0 ) {
            return die($this->json(["errors"=>["Cant Confirm"]] ,400));
        }
        $data = [
            "status" => 2
        ];
        
        // Call User Model
        $orderModel = $this->load->model('orderModel');

        $cond = "id=" . $id ;

        $result = $orderModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => ["Cant Updated Email is Already"]], 400));
        }
    }

    /**
     * 
     * Update Reject Status
     * 
     *  */ 
    public function updateReject($id = null) {
        if($id == null || $id == '' || $id == 0 ) {
            return die($this->json(["errors"=>["Cant Confirm"]] ,400));
        }
        $data = [
            "status" => 3
        ];
        
        // Call User Model
        $orderModel = $this->load->model('orderModel');

        $cond = "id=" . $id ;

        $result = $orderModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => ["Cant Updated Email is Already"]], 400));
        }
    }

    /** 
    * @route   /user/insert 
    * @desc    Insert User
    */ 
    public function insert() {

        $resultError = Validation::ordersInput();
        
        if(!$resultError["isValid"]) {
            return die($this->json($resultError, 400));
        }
        
                $data = [
                    "ticket_id"  => $_POST["ticket_id"],
                    "user_id"  => $_POST["user_id"],
                    "image" =>$_POST["image"],
                    "ga"  => $_POST["ga"] ,
                    "ga_price"  => $_POST["ga_price"],
                    "ga_quantity"  => $_POST["ga_quantity"],
                    "vip"  => $_POST["vip"],
                    "vip_price"  => $_POST["vip_price"],
                    "vip_quantity"  => $_POST["vip_quantity"],
                    "vvip"  => $_POST["vvip"],
                    "vvip_price"  => $_POST["vvip_price"],
                    "vvip_quantity"  => $_POST["vvip_quantity"],
                    "total_price"  => $_POST["total_price"],
                    "status" => 1
                ];
                
                // Call User Model
                $orderModel = $this->load->model('orderModel');
        
                $result = $orderModel->create($data);
        
                if($result["status"]) {
                    return die($this->json($result));
                } else {
                    return die($this->json(["errors" => ["Cant Inserted!!"]], 400));
                }
       

       
    }

  
    public function update() {

        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone']
        ];
        
        // Call User Model
        $orderModel = $this->load->model('orderModel');

        $cond = "id=" . $_POST["id"];

        $result = $orderModel->update($data, $cond);

        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Updated"]));
        } else {
            return die($this->json(["errors" => ["Cant Updated Email is Already"]], 400));
        }
    }

    /** 
    * @route   /user/delete
    * @param   {id} => $id from Route
    * @desc    Delete User
    */ 
    public function delete() {
        // Call User Model
        $orderModel = $this->load->model('orderModel');
        $id = $_POST["id"];
        $result = $orderModel->deleteById($id);
        
        if($result) {
            return die($this->json(["status" => true, "message" => "Successfully Deleted"]));
        } else {
            return die($this->json(["errors" => ["Cant Deleted"]], 400));
        }

    }

    /** 
    * @route   /user/updateImage
    * @param   {id} => $id from Route
    * @desc    Delete User
    */ 
    public function updateImage() {
        // Call User Model
        
        $resultError = Validation::ProfileImageInput();
        
        if(!$resultError["isValid"]) {
            return die($this->json($resultError, 400));
        }

            $file = $_FILES["file"]["tmp_name"];
            // Declare Patch
            $path = __DIR__ . "/../.././assets/images/profile/";
            // Get Origininal File's Extension
            $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            // New Name
            $newName =  "profile" . "_" . date("H_i_s") . "_" . uniqid() . "." . $ext;
           
            // die($file . "\n" . $path. "\n" . $newName);
            // Same Width Height
            if(move_uploaded_file($file, $path . $newName)) {

                    $data = [
                        "image" => URL . "/assets/images/profile/" . $newName
                    ];
                    
                    // Call User Model
                    $orderModel = $this->load->model('orderModel');
            
                    $cond = "id=" . $_POST["id"];
            
                    $result = $orderModel->update($data, $cond);
            
                    if($result) {
                        return die($this->json(["status" => true, "message" => "Successfully Updated"]));
                    } else {
                        return die($this->json(["errors" => ["Cant Updated"]], 400));
                    }
               
                    die(json_encode("UPLOADED"));

            } else {
                $err = "Can't Upload Something Wrong";
                return die($this->json(['errors' => [$err] ], 400));
            }

    }

    /**
     * @route   /user/pageCount
     * @param   arr = [
     *          "table" => "user",
     *          "cond" => " WHERE `deleted_at` IS NULL",
     *          "limit" => "",
     *          "model" => $orderModel
     *          ]
     */
    public function pageCount($arr = ["table" => "testing_table","cond" => "cond","limit" => "", "model" => "useModel"]) {
       
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
            $orderModel = $arr["model"];
        } else {
            $orderModel = $this->load->model("testingModel");
        }

        return ($orderModel->pageCount($table, $cond, $limit));
    }
 }