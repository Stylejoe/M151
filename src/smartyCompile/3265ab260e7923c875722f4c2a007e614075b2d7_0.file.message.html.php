<?php
/* Smarty version 3.1.33, created on 2018-12-23 09:47:15
  from 'C:\xampp\htdocs\src\classes\View\templates\includes\message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f4b93a78660_67752426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3265ab260e7923c875722f4c2a007e614075b2d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\includes\\message.html',
      1 => 1545554676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f4b93a78660_67752426 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
    Dieses File dient zur Ausgabe für verschiedene Meldungen an den User
    z.B. Für ein ungültiges Passwort, oder erfolgreiches registrieren etc.
-->
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</p><?php }
}
