<?php
/* Smarty version 3.1.33, created on 2018-12-11 16:40:02
  from 'C:\xampp\htdocs\src\classes\View\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0fda528e06a6_80414256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cedd79a574cfcb0b6a9335e14f266446d1f2f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\login.html',
      1 => 1544542800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5c0fda528e06a6_80414256 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
            <form method="POST" >
                    <input type="text" placeholder="Login" name="login"/>
                    <input type="password" placeholder="Password" name="password"/>
            
                    <input type="button" value="Login" name="loginButton"/>
                    <input type="button" value="Register" name="registerButton"/>
                </form>   
    </div>
    
    
</body>
</html><?php }
}