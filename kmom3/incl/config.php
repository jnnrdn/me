<?php
// start a named session
session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

include_once(dirname(__FILE__) . '/../src/common.php');

// Turn on error reporting
error_reporting(-1);

// include functions for login & logout
include_once(dirname(__FILE__) . "/../src/login.php");

// account and password that can login
$userAccount = "doe";
$userPassword = userPassword("doe");
