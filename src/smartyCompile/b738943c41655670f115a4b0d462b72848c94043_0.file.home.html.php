<?php
/* Smarty version 3.1.33, created on 2018-12-22 01:40:55
  from 'C:\xampp\htdocs\src\classes\View\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d8817d5ebd3_88712085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b738943c41655670f115a4b0d462b72848c94043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\home.html',
      1 => 1545439197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:message.html' => 1,
  ),
),false)) {
function content_5c1d8817d5ebd3_88712085 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--Dashboard, showing all media-->
    <div>
               
    </div>

    <!--Media Upload-->
    <div>
        <form enctype="multipart/form-data" method="POST" class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
            <input type="file" name="picture" id="fileToUpload">
            <input type="button" value="Upload!" formaction="Upload">
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:message.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
</body>
</html><?php }
}
