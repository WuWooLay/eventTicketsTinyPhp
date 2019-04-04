<?php

/**
 * 
 * Session Class
 * 
 */    

class Session {

    // Declare Session Initial State , 
    // Session Start
    public static function init() {
        session_start();
    }

    // SetSesstion 
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Get Session 
    public static function get($key) {
        if (isset( $_SESSION[$key])) {
            return  $_SESSION[$key];
        } else {
            return false;
        }
    }

    // Check Session
    public static function checkSession($key) {
        self::init();
        if(self::get($key) == false) {
            self::destory();
            header("Location:" , URL);
        }  else {
            return true;
        }
    }

    // Destory Session
    public function destory() {
        session_destory();
    }

}