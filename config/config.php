<?php

    $constant = [
        "URL" => "http://eventticket.com", // BASE_URL
        "DB_NAME" => "db_events_mvc",
        "HOST_NAME" => "localhost",
        "DB_USER" => "root",
        "DB_PASS" => ""
    ];

    foreach($constant as $key => $value) {
        define($key, $value);
    }