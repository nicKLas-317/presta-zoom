<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-14 14:11:01
  from 'C:\wamp64\www\prestashop\admin345kplqfd\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600042e5137b29_29141343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e0a6b38f3e5a579b75f43e5c7582085166abf1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin345kplqfd\\themes\\default\\template\\content.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600042e5137b29_29141343 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
