<?php

     // Asia/Rangoon
     date_default_timezone_set('Asia/Rangoon');
     // die(date_default_timezone_get());
    //  die(date('Y-m-d H:i:s', time()));

    $constant = [
        "URL" => "http://eventticket.com", // BASE_URL
        "DB_NAME" => "db_events_mvc",
        "HOST_NAME" => "localhost",
        "DB_USER" => "root",
        "DB_PASS" => "",
        "LIMIT_PAGE_OFFSET" => 10,
        "DEFAULT_USER_IMAGE" => "/assets/images/logo/default.svg"
    ];

    foreach($constant as $key => $value) {
        define($key, $value);
    }