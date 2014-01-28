<?php

require 'core/loader.php';

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cryptedPass = md5($user.$pass);

    $userExist = $db->fetchUserId("SELECT id
                FROM users
                WHERE user = '$user'
                AND pass = '$cryptedPass'");

    if($userExist){
        $_SESSION['uid'] = $userExist['id'];
        echo 'logged';
    } else { echo 'failed'; }
} elseif (isset($_SESSION['uid'])){
    debug::throwOut($_SESSION['uid']);
} else { $smarty->display('admin/login.tpl'); }