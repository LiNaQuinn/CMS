<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:13:20
         compiled from "..\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1196552e80ed0ee6d00-15294603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5221b3d218854fadc4e05ecee7282bae1b06abb5' => 
    array (
      0 => '..\\templates\\admin\\login.tpl',
      1 => 1390939996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196552e80ed0ee6d00-15294603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e80ed1336ae7_69378553',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e80ed1336ae7_69378553')) {function content_52e80ed1336ae7_69378553($_smarty_tpl) {?><form action="index.php" method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit" name="login" value="Login">
</form><?php }} ?>
