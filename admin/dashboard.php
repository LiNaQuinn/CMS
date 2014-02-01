<?php

require './core/loader.php';
require './handlers/module.php';

if(empty($_SESSION['uid'])){ header('Location: index.php'); }

$module = new Module($db);

//$smarty->debugging = true;



// logic controller

switch($_GET['content']){

    case 'add':
        $smarty->assign('CONTENT_MODULE', 'add');
        if(!empty($_POST['content_text'])){
            $contentModule = new ContentModule($db);
            $contentModule->insert($_POST['content_text']);
            echo('saved');
        }
        break;

    case 'get':
        $contentModule = new ContentModule($db);
        $smarty->assign('CONTENT_DATA', $contentModule->retrieve());
        break;

}

if ($_GET['add'] == 'content') {
}

// DEBUG
if($_GET['session'] == 'destroy'){
    session_destroy();
    header('Location: index.php');
}

$smarty->display('./admin/dashboard.tpl');
