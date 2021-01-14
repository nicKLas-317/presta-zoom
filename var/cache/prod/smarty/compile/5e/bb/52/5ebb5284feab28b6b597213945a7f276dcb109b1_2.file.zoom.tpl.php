<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-14 14:51:47
  from 'C:\wamp64\www\prestashop\modules\zoom\views\templates\hook\zoom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60004c73e7de79_66349104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ebb5284feab28b6b597213945a7f276dcb109b1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\zoom\\views\\templates\\hook\\zoom.tpl',
      1 => 1610630624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60004c73e7de79_66349104 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block zoom -->
<div id="zoom_block_home" class="block">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome!','mod'=>'zoom'),$_smarty_tpl ) );?>
</h4>
  <div class="block_content">
    <p>Hello,
           <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value) && $_smarty_tpl->tpl_vars['my_module_name']->value) {?>
               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_name']->value, ENT_QUOTES, 'UTF-8');?>

           <?php } else { ?>
               World
           <?php }?>
           !
    </p>
  </div>
</div>
<!-- /Block zoom --><?php }
}
