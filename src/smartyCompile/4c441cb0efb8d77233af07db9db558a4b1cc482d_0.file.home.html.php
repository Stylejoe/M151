<?php
/* Smarty version 3.1.33, created on 2018-12-23 14:10:31
  from 'C:\xampp\htdocs\src\classes\View\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f8947dc6068_43858427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c441cb0efb8d77233af07db9db558a4b1cc482d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\home.html',
      1 => 1545570630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:uploadForm.html' => 1,
    'file:uploads.html' => 1,
  ),
),false)) {
function content_5c1f8947dc6068_43858427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body >
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div class="row">
            <!--Media Upload-->
            <div class="col-4">
                <?php $_smarty_tpl->_subTemplateRender('file:uploadForm.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <!--Dashboard, showing all media-->
            <div class="col-8">
                <h2><?php echo $_smarty_tpl->tpl_vars['boardTitle']->value;?>
</h2>
                <?php $_smarty_tpl->_subTemplateRender('file:uploads.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>  
</body>
</html><?php }
}
