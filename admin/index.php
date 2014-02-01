<?php

require 'core/loader.php';

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cryptedPass = md5($user.$pass);

    $userExist = $db->fetchUserId($user, $cryptedPass);

    if($userExist){
        $_SESSION['uid'] = $userExist['id'];
        header('Location: dashboard.php');
    } else { echo 'failed'; }

} elseif (isset($_SESSION['uid'])){
    debug::throwOut($_SESSION['uid']);
} else { $smarty->display('admin/login.tpl'); }