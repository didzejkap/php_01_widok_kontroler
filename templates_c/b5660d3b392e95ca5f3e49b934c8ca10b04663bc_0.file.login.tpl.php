<?php
/* Smarty version 4.1.0, created on 2022-04-04 14:50:54
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ae9aedf2f60_93122921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5660d3b392e95ca5f3e49b934c8ca10b04663bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\views\\login.tpl',
      1 => 1649015612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624ae9aedf2f60_93122921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302838579624ae9aedeb067_86528303', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_302838579624ae9aedeb067_86528303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_302838579624ae9aedeb067_86528303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<div class="main">
			<form>
			<p class="sign" align="center">Zaloguj się</p>
				<div class="form1">
					<input class="un" id="id_login" type="text" name="login" align="center" placeholder="nazwa uzytkownika" value="admin"/>
					<input class="password" id="id_pass" type="password" name="password" align="center" placeholder="haslo" value="admin"/>
				</div>
				<button class="submit" type="submit" value="zaloguj">Zaloguj sie</button>
			</form>
			<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>




<?php
}
}
/* {/block 'content'} */
}
