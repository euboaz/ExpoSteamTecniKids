<?php
/* Smarty version 4.3.4, created on 2024-06-17 23:37:56
  from 'C:\xampp\htdocs\view\templates\login_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670acb4a06c93_68575284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ae5446786c6de45e3e7f11b0127170ad7c12365' => 
    array (
      0 => 'C:\\xampp\\htdocs\\view\\templates\\login_head.tpl',
      1 => 1718660273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670acb4a06c93_68575284 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!-- ruta relativa al archivo CSS -->
    <link rel="stylesheet" href=".\body_main.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/utilities/utilities.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="?accion=menu_principal">
      <img src="https://tecnikids.com/Tkplataforma/pluginfile.php/1/core_admin/logo/0x200/1718307159/TK%20logofinal%20sin%20slogan.png" width="200" height="45" alt="Logo">
    </a>
    <a href="?accion=iniciar_sesion" class="iniciar-sesion-btn">Iniciar Sesi&oacute;n</a>
  </div>
</nav>

</body>
</html>
<?php }
}