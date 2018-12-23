<?php
/* Smarty version 3.1.33, created on 2018-12-23 18:20:02
  from 'C:\xampp\htdocs\src\classes\View\templates\pageNotFound.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fc3c2bc83d1_90349838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83356d494fae5d27796b1df162f68705615d7384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\pageNotFound.html',
      1 => 1545584212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5c1fc3c2bc83d1_90349838 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <h1>Die Seite mit Url: <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 konnte nicht gefunden werden!</h1>
</body>
</html><?php }
}
