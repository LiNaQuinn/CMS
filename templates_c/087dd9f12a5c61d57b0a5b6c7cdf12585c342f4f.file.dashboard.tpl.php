<?php /* Smarty version Smarty-3.1.16, created on 2014-01-30 18:42:25
         compiled from "..\templates\admin\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2375452e95dfc2f9932-09994406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087dd9f12a5c61d57b0a5b6c7cdf12585c342f4f' => 
    array (
      0 => '..\\templates\\admin\\dashboard.tpl',
      1 => 1391103744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2375452e95dfc2f9932-09994406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e95dfc4f1827_55194187',
  'variables' => 
  array (
    'CONTENT_DATA' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e95dfc4f1827_55194187')) {function content_52e95dfc4f1827_55194187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\sites\\CMS\\smarty\\plugins\\function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ('admin/i_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="top-menu">
	<ul>
		<li><a href="#">test</a></li>
		<li><a href="#">test</a></li>
		<li><a href="#">test</a></li>
	</ul>
</div>

<div id="main">
	<div class="module">
        <h2>Content</h2>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CONTENT_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
			<li class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>
</li>
		<?php } ?>
		</ul>
	</div>
</div>

<a href="?session=destroy">sessionDestroy</a><br>
<a href="?add=content">addContent</a><?php }} ?>
