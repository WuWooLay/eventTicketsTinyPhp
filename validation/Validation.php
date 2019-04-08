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

    // Profile Image Input Validation
    public static function ProfileImageInput() {
        $errors = array();

        if(
            !isset($_FILES['file']['tmp_name']) ||
            !isset($_POST["id"])
        )
        {   
            if(!isset($_FILES['file']['tmp_name'])) {
                $errors[] = "File Field is Required";
            }

            if(!isset($_POST["id"])) {
                $errors[] = "Id Field is Required";
            }

        } else {
            $file = $_FILES["file"]["tmp_name"];
            if($check = @getimagesize($file)) {
                // Check Image True But If Error Occur We Show Errors
                
                    // Allowed Extension
                    $allowed =  ['png', 'jpg', 'jpeg'];
                
                    // Get Origininal File's Extension
                    $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
                
                    if( in_array($ext, $allowed) ) {
                        // Image Type is Allowed in Array
                        
                        // Check file size
                        $KB = ($_FILES["file"]["size"]/1024);
                       
                        if (($KB/1024) > 2) {
                            $errors[] = "Sorry, your file is Larger Than 2Mb .";
                        }
                
                
                    } else {
                        // Not Image In Array
                       $errors[] = "$ext".  " JPG, PNG files Not Found In Image Array"; 
                    }
            
            } else {
                $errors[] = "Only JPG & PNG files R allowed But Your " . $_FILES["file"]["name"];
            }
    

        }

        return[
            "errors" => $errors,
            "isValid" => count($errors)==0 ? true: false
        ];
    }

 }