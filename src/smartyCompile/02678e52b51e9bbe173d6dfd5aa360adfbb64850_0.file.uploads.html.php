<?php
/* Smarty version 3.1.33, created on 2018-12-23 18:24:19
  from 'C:\xampp\htdocs\src\classes\View\templates\includes\uploads.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fc4c39df900_05492328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02678e52b51e9bbe173d6dfd5aa360adfbb64850' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\includes\\uploads.html',
      1 => 1545585857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comments.html' => 1,
  ),
),false)) {
function content_5c1fc4c39df900_05492328 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uploads']->value, 'upload');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['upload']->value) {
?>
            <div class="card" style="width: 30rem;">           
                <div class="card-body">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['upload']->value->title;?>
</h4>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['upload']->value->srcPath;?>
" class="card-img-top">
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['upload']->value->description;?>
</p>
                    <a href="/home?mediaId=<?php echo $_smarty_tpl->tpl_vars['upload']->value->id;?>
" class="btn btn-primary">Details</a>
                </div>
            </div>
            <br>
            <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:comments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
