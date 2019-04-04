<?php

/**
 * Validation Class
 */

 class Validation {

    function __construct() {
        // Nothing Doing
        // echo "Validation Calling";
    }


    // User Create Input Validation
    public static function UserInput() {
        $errors = array();

        if(
            !isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['password']) ||
            !isset($_POST['phone']) 
        )
        {
            // If Name Null
            if (!isset($_POST['name'])) {
                $errors[] = "Name Field is Required";
            }

            // If Email Null
            if (!isset($_POST['email'])) {
                $errors[] = "email Field is Required";
            }

            // If Password Null
            if (!isset($_POST['password'])) {
                $errors[] = "password Field is Required";
            }

            // If Phone Null
            if (!isset($_POST['phone'])) {
                $errors[] = "phone Field is Required";
            }
            
        }


        return [
            "errors" => $errors,
            "isValid" => count($errors)==0
        ];
    }

 }