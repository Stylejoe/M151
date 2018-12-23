<?php
/* Smarty version 3.1.33, created on 2018-12-23 18:22:29
  from 'C:\xampp\htdocs\src\classes\View\templates\detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fc455735444_22270169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6429eab288c9affe0d22b5a3bc024f85242a1529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\detail.html',
      1 => 1545585745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:uploads.html' => 1,
  ),
),false)) {
function content_5c1fc455735444_22270169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body >
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div class="row">
        <!--Dashboard, showing all media-->
        <div class="col">
            <?php $_smarty_tpl->_subTemplateRender('file:uploads.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
</body>
</html><?php }
}
