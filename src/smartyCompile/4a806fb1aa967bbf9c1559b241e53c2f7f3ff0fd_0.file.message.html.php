<?php
/* Smarty version 3.1.33, created on 2018-12-18 09:11:18
  from 'C:\xampp\htdocs\src\classes\View\templates\message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18aba6315567_51267852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a806fb1aa967bbf9c1559b241e53c2f7f3ff0fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\message.html',
      1 => 1545117527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c18aba6315567_51267852 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
    Dieses File dient zur Ausgabe für verschiedene Meldungen an den User
    z.B. Für ein ungültiges Passwort, oder erfolgreiches registrieren etc.
-->
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</p><?php }
}
