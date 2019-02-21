<?php
/* Smarty version 3.1.30, created on 2019-01-11 12:10:11
  from "C:\www\MVC\application\admin\view\goods_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c3887a3ef2cd4_70500569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380fe035b041113c0c78905653ac52af024e3743' => 
    array (
      0 => 'C:\\www\\MVC\\application\\admin\\view\\goods_list.tpl',
      1 => 1547208562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3887a3ef2cd4_70500569 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
