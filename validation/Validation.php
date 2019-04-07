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
            
        } else {

            if (!stristr($_POST['email'],"@") OR !stristr($_POST['email'],".")) {
                $errors[] = "Email is not Valid";
            } 

            if (strlen($_POST['password'])<6) {
                $errors[] = "Password less than 6";
            }

            if (trim($_POST['name']) == '') {
                $errors[] = "Name is Required";
            }

            if (trim($_POST['email']) == '') {
                $errors[] = "Email is Required";
            }


            if (trim($_POST['phone']) == '') {
                $errors[] = "Phone is Required";
            }

            

        }


        return [
            "errors" => $errors,
            "isValid" => count($errors)==0
        ];
    }


     // User Create Input Validation
    public static function LoginInput() {
        $errors = array();

        if(
            !isset($_POST['email']) ||
            !isset($_POST['password']) 
        )
        {
            // If Email Null
            if (!isset($_POST['email'])) {
                $errors[] = "email Field is Required";
            } 


            // If Password Null
            if (!isset($_POST['password'])) {
                $errors[] = "password Field is Required";
            }

        } else {
            
            if (!stristr($_POST['email'],"@") OR !stristr($_POST['email'],".")) {
                $errors[] = "Email is not Valid";
            } 

            if (strlen($_POST['password'])<6) {
                $errors[] = "Password less than 6";
            }


        }

        return[
            "errors" => $errors,
            "isValid" => count($errors)==0 ? true: false
        ];
    }

 }