<?php
/* Smarty version 3.1.30, created on 2017-06-26 13:34:54
  from "C:\wamp64\www\adminBlog\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59510d7ee7b665_80757799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cd2f311d92fe93332ff3c6755f240f5e3d3a94b' => 
    array (
      0 => 'C:\\wamp64\\www\\adminBlog\\templates\\index.tpl',
      1 => 1498484093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59510d7ee7b665_80757799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
        <html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Title</title>
</head>
<body>
<h1></h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
        <h1><?php echo $_smarty_tpl->tpl_vars['blog']->value['titel'];?>
</h1>
        <h2>Posted on: <?php echo $_smarty_tpl->tpl_vars['blog']->value['datum'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['body'];?>
</p>
        <a href="index.php?action=wijzigenForm&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['idblogpost'];?>
">Edit tekst</a>
        <a href="index.php?action=verwijderen&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['idblogpost'];?>
">Delete tekst</a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</body>
</html><?php }
}
