<?php
/* Smarty version 3.1.33, created on 2018-12-23 19:46:10
  from 'C:\xampp\htdocs\src\classes\View\templates\includes\comments.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fd7f28fe340_55475247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3dd5cdfd82bea3fd0cf1207cce2d3abe3262c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\includes\\comments.html',
      1 => 1545590633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1fd7f28fe340_55475247 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
        <form method="POST">
            <textarea name="comment" class="form-control" placeholder="Write something nice!" required></textarea>
            <input class="btn btn-primary" type="submit" value="Post!" formaction="/home?mediaId=<?php echo $_smarty_tpl->tpl_vars['upload']->value->id;?>
&action=insert">
        </form>
        <br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                <textarea class="form-control" readonly><?php echo $_smarty_tpl->tpl_vars['comment']->value->content;?>
</textarea>
                <br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
