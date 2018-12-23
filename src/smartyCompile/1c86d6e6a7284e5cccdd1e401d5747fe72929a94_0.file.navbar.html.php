<?php
/* Smarty version 3.1.33, created on 2018-12-23 19:18:34
  from 'C:\xampp\htdocs\src\classes\View\templates\includes\navbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1fd17adfad70_20797188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c86d6e6a7284e5cccdd1e401d5747fe72929a94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\includes\\navbar.html',
      1 => 1545589112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1fd17adfad70_20797188 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="/home">Media Center</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/home">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/home/Uploads">Your Uploads</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/profile">Profile</a>
            </li>
            <li class="nav-item">
                <form method="POST">
                    <input class="btn btn-primary" type="submit" value="Logout" formaction="Logout">
                </form>
            </li>
        </ul>
    </div>
</nav>
<br><?php }
}
