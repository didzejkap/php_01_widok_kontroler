<?php
/* Smarty version 4.1.0, created on 2022-04-03 21:54:11
  from 'C:\xampp\htdocs\Kalkulkator-ratalny\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249fb634bff64_79532620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5826305bfe780f7cd61373e4e72f848afd038a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulkator-ratalny\\app\\views\\templates\\main.tpl',
      1 => 1648997066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249fb634bff64_79532620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>

	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div class="login-box">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_476933896249fb634bf013_16941243', 'content');
?>

    </div>

</body>
</html><?php }
/* {block 'content'} */
class Block_476933896249fb634bf013_16941243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_476933896249fb634bf013_16941243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
