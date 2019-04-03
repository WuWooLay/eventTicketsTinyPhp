<?php

    // Require Main CLass 
    require_once "./config/config.php";

    // Load All Class In System Libs ...
    spl_autoload_register(function($class) {
        require_once "./system/libs/${class}.php";
    });

    /**
     * Getting Routes Url
     * @param url [array] like controller/method/params
     */ 
    $url = isset($_GET['url']) ? $_GET['url'] : null ;

    if($url === null) {
        unset($url);
    } else {
        $url = rtrim($url, "/");
        // Filter URL with Filter_Var BuildInMethod
        $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
    }

    /**
     * Assign Controller / Method / Params
     * @param url[0] = Controller
     * @param url[1] = Method
     * @param url[2] = Params 
     */
    if(isset($url[0])) {
        
        $controllerName = $url[0];
        include "./app/controllers/" . $controllerName . "Controller.php";
        $controller = new $controllerName();
        
        // If isset Parameters Call Function With Parameters
        if(isset($url[2])) {
            $method = $url[1];
            $params = $url[2];
            #if Get Params
            $controller->$method($params);

        } else if(isset($url[1])) {
            // Only Get Method
            $method = $url[1];
            $controller->$method();
        } else {
            /**
             * @desc if Only Call Controller 
             * Index Method 'll be Called
             */
            $controller->index();
        }
        
    } else {
    // If donesn't Have Controller Name 
       include "./app/controllers/IndexController.php";
       $controller = new Index();
       $controller->home();
    }

    die("");

    
