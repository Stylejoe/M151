<?php
/* Smarty version 3.1.33, created on 2018-12-23 14:08:11
  from 'C:\xampp\htdocs\src\classes\View\templates\includes\uploadForm.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f88bb48f737_41887228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3dd47d5c95f8987f5f91cba1aa6aa5a77fbfe1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\includes\\uploadForm.html',
      1 => 1545570461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:message.html' => 1,
  ),
),false)) {
function content_5c1f88bb48f737_41887228 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Upload new Content</h2>
            <form enctype="multipart/form-data" method="POST" class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="picture" required>
    
                <input type="text" name="title" placeholder="Title" class="form-control" required>
                <textarea name="description" placeholder="Description" class="form-control" required></textarea> 
                <?php $_smarty_tpl->_subTemplateRender('file:message.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <input type="submit" name="submit" value="Upload!" formaction="Upload" class="btn btn-primary">
            </form><?php }
}
