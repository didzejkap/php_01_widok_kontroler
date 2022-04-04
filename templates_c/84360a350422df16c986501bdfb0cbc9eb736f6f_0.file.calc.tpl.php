<?php
/* Smarty version 4.1.0, created on 2022-04-03 22:26:40
  from 'C:\xampp\htdocs\Kalkulkator-ratalny\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624a0300a9ce99_28370947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84360a350422df16c986501bdfb0cbc9eb736f6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\calc.tpl',
      1 => 1649017595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624a0300a9ce99_28370947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1379061446624a0300a8b818_52129123', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1379061446624a0300a8b818_52129123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1379061446624a0300a8b818_52129123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">

		<div class="main">
			<h2>Kalkulator kredytowy</h2>
			<form>
				<div class="zawartosc">
					<label>Podaj kwotę kredytu:</label>
					<input class="form-control" id="id_credit_amount" type="text" name="credit_amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit_amount;?>
" /><br />
				</div>
	
				<div class="zawartosc">
					<label>Wpisz liczbę oprocentowania:</label>
					<input class="form-control" id="percent" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" /><br />
				</div>
					<div class="zawartosc">
					<label>Wybierz okres spłaty kredytu:</label>
					<div class="select">
						<select class="form-select" name="op">
							<option value="1">Jeden Rok</option>
							<option value="2">Dwa lata</option>
							<option value="3">Trzy lata</option>
							<option value="4">Pięć lat</option>
							<option value="5">Dziesięć lat</option>
						</select>
					</div></br>
				</div>
				<button class="btn btn-info" type="submit" align="center" value="Oblicz">Oblicz</button>

				<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
					<div style="background-color: #8C55AA; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
						Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</div>
                <?php }?>

				</div>
				<a style="position:absolute; top:0px; right:0px;" class="btn btn-primary" href ="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></br>
			</form>

	</form>
<?php
}
}
/* {/block 'content'} */
}
