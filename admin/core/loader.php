<?php

define('DEBUG_ENABLER', true);

require './handlers/debug.php';
require './handlers/db.php';
require './handlers/session.php';
require 'smarty.php';

$debug = new Debug('debug', DEBUG_ENABLER);
$db = new DBhandler();
$db->connect();
$session = new Session();