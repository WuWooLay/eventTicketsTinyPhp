<?php

/**
 * DController
 */

 class Dcontroller {

    protected $load = array();

    function __construct () {
        // echo " D Controller In LIbs From Parent~!!<br> ";
        $this->load = new Load();
    }

 }