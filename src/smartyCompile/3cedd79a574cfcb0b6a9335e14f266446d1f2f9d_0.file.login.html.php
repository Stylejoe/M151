<?php
/* Smarty version 3.1.33, created on 2018-12-11 21:15:09
  from 'C:\xampp\htdocs\src\classes\View\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c101acd9ab850_79965480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cedd79a574cfcb0b6a9335e14f266446d1f2f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\login.html',
      1 => 1544559307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5c101acd9ab850_79965480 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
            <form action="login" method="POST" >
                    <input type="text" placeholder="Login" name="login"/>
                    <input type="password" placeholder="Password" name="password"/>
            
                    <input type="submit" value="Login" name="loginButton"/>
                    <input type="submit" value="Register" name="registerButton"/>
                </form>   
    </div>
    
    
</body>
</html><?php }
}
