<?php
/* Smarty version 3.1.33, created on 2018-12-23 09:01:07
  from 'C:\xampp\htdocs\src\classes\View\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f40c3ab8530_84317170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cedd79a574cfcb0b6a9335e14f266446d1f2f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\login.html',
      1 => 1545552058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:message.html' => 1,
  ),
),false)) {
function content_5c1f40c3ab8530_84317170 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div class="jumbotron">
        <h2>Media Center</h2>
        <form method="POST" class="form-group">
                <input type="text" class="form-control" placeholder="Login" name="login"/>
                <input type="password" class="form-control" placeholder="Password" name="password"/>

                <?php $_smarty_tpl->_subTemplateRender('file:message.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
                <input type="submit" class="btn btn-primary" formaction="login" value="Login" name="loginButton"/>
                <input type="submit" class="btn btn-primary" formaction="register" value="Register" name="registerButton"/>
        </form>           
    </div>       
</body>
</html><?php }
}
