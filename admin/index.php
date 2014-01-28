<?php

require 'core/loader.php';

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cryptedPass = md5($user.$pass);

    $userExist = $db->fetch("SELECT id
                FROM users
                WHERE user = '$user'
                AND pass = '$cryptedPass'");

    if($userExist){
        echo 'logged';
    } else { echo 'failed'; }
}

$smarty->display('admin/login.tpl');