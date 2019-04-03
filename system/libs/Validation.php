<?php

/**
 * Validation Class
 */

 class Validation {

    function __construct() {
        // Nothing Doing
        // echo "Validation Calling";
    }

    public static function UserInput($data = []) {
        echo "USer Input Validation";

        return [
            "errors" => [],
            "isValid" => true
        ];
    }

 }