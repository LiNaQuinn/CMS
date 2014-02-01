<?php

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('DEBUG_ENABLER', true);
define('DEBUG_LOG_FILE', './logs/debug.log');

date_default_timezone_set('GMT');

require './handlers/debug.php';
require './handlers/db.php';
require './handlers/session.php';
require 'smarty.php';

$debug = new Debug('debug', DEBUG_ENABLER);
$db = new DBhandler();
$session = new Session();