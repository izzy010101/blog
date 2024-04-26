<?php
    
    // this file will be the entry point of the application
    
    // start the session when the application starts
    session_start();
    
    require('functions.php');
    require ('classes/Database.php');
    require ('classes/Response.php');
    require('router.php');

    $config = require('config.php');
