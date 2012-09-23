<?php
// start a named session
session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

include_once(dirname(__FILE__) . '/../src/common.php');

// Turn on error reporting
error_reporting(-1);

// time page generation, display in footer. comment out to disable timing.
$pageTimeGeneration = microtime(true);