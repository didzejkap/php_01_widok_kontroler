<?php
/* Smarty version 4.1.0, created on 2022-04-04 14:50:54
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ae9aee8c3e7_69104694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8caf2db4a11588f2aa16da0d633649f0e60a0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\views\\templates\\main.tpl',
      1 => 1649076465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624ae9aee8c3e7_69104694 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492521771624ae9aee8b3f6_08728247', 'content');
?>

    </div>

</body>
</html><?php }
/* {block 'content'} */
class Block_1492521771624ae9aee8b3f6_08728247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1492521771624ae9aee8b3f6_08728247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 content <?php
}
}
/* {/block 'content'} */
}
