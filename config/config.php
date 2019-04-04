<?php

    $constant = [
        "URL" => "http://eventticket.com", // BASE_URL
        "DB_NAME" => "db_events_mvc",
        "HOST_NAME" => "localhost",
        "DB_USER" => "root",
        "DB_PASS" => "",
        "LIMIT_PAGE_OFFSET" => 10
    ];

    foreach($constant as $key => $value) {
        define($key, $value);
    }