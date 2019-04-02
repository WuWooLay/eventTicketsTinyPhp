<?php

/**
 * @desc D Model Is Get Private db From Database.Php
 * @desc For All Models that 'll be extend this .
 * @desc D for Destiny [ For Meaning ] 
 */

    class Dmodel {

        protected $db = array();

        public function __construct() {

            $db_name = "db_events_mvc";
            $host_name = "localhost";
            $user = "root";
            $pass = "";
    
            $dsn = "mysql:dbname=". $db_name . "; host=" . $host_name ;

            $this->db = new Database($dsn, $user, $pass);
        }

    }