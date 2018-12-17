<?php
/* Smarty version 3.1.33, created on 2018-12-17 14:10:58
  from 'C:\xampp\htdocs\src\classes\View\templates\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c17a0628a5f04_59779364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b70d4d196fd03049a795ebff040795a3236f62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\error.html',
      1 => 1545052229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c17a0628a5f04_59779364 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
    Dieses File dient zur Ausgabe für Fehlermeldungen an den User
    z.B. Für ein ungültiges Passwort
-->
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>
</p><?php }
}
