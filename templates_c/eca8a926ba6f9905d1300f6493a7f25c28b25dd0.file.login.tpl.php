<?php /* Smarty version Smarty-3.1.16, created on 2014-01-31 21:44:22
         compiled from "../templates/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128405611752ec0b26637de2-84207736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca8a926ba6f9905d1300f6493a7f25c28b25dd0' => 
    array (
      0 => '../templates/admin/login.tpl',
      1 => 1390939996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128405611752ec0b26637de2-84207736',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ec0b26690de0_75901728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ec0b26690de0_75901728')) {function content_52ec0b26690de0_75901728($_smarty_tpl) {?><form action="index.php" method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit" name="login" value="Login">
</form><?php }} ?>
