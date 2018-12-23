<?php
/* Smarty version 3.1.33, created on 2018-12-23 09:44:51
  from 'C:\xampp\htdocs\src\classes\View\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f4b038c2fc9_77399145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b738943c41655670f115a4b0d462b72848c94043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\home.html',
      1 => 1545554689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:/includes/message.html' => 1,
  ),
),false)) {
function content_5c1f4b038c2fc9_77399145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body >
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div class="row">
                <!--Dashboard, showing all media-->
    <div class="col-8">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uploads']->value, 'upload');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['upload']->value) {
?>
            <div class="card" style="width: 25rem;">           
                <div class="card-body">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['upload']->value['title'];?>
</h4>
                    <p>Created by <?php echo $_smarty_tpl->tpl_vars['upload']->value['username'];?>
</p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['upload']->value['srcPath'];?>
" class="card-img-top">
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['upload']->value['description'];?>
</p>
                    <a href="/home?mediaId=<?php echo $_smarty_tpl->tpl_vars['upload']->value['mediaId'];?>
" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
    <!--Media Upload-->
    <div class="col-4">
            <form enctype="multipart/form-data" method="POST" class="form-group">
                <input type="file" name="picture" required>
    
                <input type="text" name="title" placeholder="Title" class="form-control" required>
                <textarea name="description" placeholder="Description" class="form-control" required></textarea> 
                <?php $_smarty_tpl->_subTemplateRender('file:/includes/message.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <input type="submit" name="submit" value="Upload!" formaction="Upload" class="btn btn-primary">
            </form>
        </div>
        </div>
    </div>  
</body>
</html><?php }
}
