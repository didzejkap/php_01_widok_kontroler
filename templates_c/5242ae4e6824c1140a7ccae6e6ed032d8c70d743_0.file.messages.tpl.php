<?php
/* Smarty version 4.1.0, created on 2022-04-03 21:54:11
  from 'C:\xampp\htdocs\Kalkulkator-ratalny\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249fb63512e63_40947540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5242ae4e6824c1140a7ccae6e6ed032d8c70d743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\templates\\messages.tpl',
      1 => 1649000732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249fb63512e63_40947540 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <div style="background-color: red; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 <br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
    <div style="background-color: #E1BEE7; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </br>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
