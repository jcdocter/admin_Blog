<?php
/* Smarty version 3.1.30, created on 2017-06-26 13:23:10
  from "C:\wamp64\www\adminBlog\templates\wijzigenForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59510abeb041c6_25368174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df775c8ea6c7e71dfc7f8d2cd73c9bcee8deee94' => 
    array (
      0 => 'C:\\wamp64\\www\\adminBlog\\templates\\wijzigenForm.tpl',
      1 => 1498483385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59510abeb041c6_25368174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?action=wijzigen" method="post" id="update">
    <input type="text" name="titel" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['titel'];?>
"><br>
    <textarea name="body" form="update"><?php echo $_smarty_tpl->tpl_vars['blog']->value['body'];?>
</textarea>
    <input type="submit" value="updaten">
    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['idblogpost'];?>
">
</form>



</body>
</html><?php }
}
