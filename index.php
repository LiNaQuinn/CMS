<?php

require 'loader.php';

$result = $db->fetch("SELECT * FROM testing");

echo '<pre>';
var_dump($result);
// smarty
$smarty->debugging = true;

$smarty->display('index.tpl');

