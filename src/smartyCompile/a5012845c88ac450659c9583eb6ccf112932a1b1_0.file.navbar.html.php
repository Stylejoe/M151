<?php
/* Smarty version 3.1.33, created on 2018-12-23 09:22:19
  from 'C:\xampp\htdocs\src\classes\View\templates\navbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f45bbdde0f1_64868235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5012845c88ac450659c9583eb6ccf112932a1b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\classes\\View\\templates\\navbar.html',
      1 => 1545552181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f45bbdde0f1_64868235 (Smarty_Internal_Template $_smarty_tpl) {
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
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php }
}
