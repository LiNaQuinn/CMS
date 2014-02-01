<?php

require './core/loader.php';
require './handlers/module.php';

if(empty($_SESSION['uid'])){ header('Location: index.php'); }

$module = new Module($db);

$smarty->debugging = true;

if ($_GET['add'] == 'content') {
	$contentModule = new ContentModule($db);
	$smarty->assign('CONTENT_DATA', $contentModule->add());
}

// DEBUG
if($_GET['session'] == 'destroy'){
    session_destroy();
    header('Location: index.php');
}

$smarty->display('./admin/dashboard.tpl');
