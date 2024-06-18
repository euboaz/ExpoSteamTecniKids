<?php
/* Smarty version 4.3.4, created on 2024-06-17 23:35:59
  from 'C:\xampp\htdocs\view\templates\login_iniciar_sesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670ac3fab7ca7_96561144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e15c429be4b7abd07f3848a278f2121e389b03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\view\\templates\\login_iniciar_sesion.tpl',
      1 => 1718660157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670ac3fab7ca7_96561144 (Smarty_Internal_Template $_smarty_tpl) {
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
  </div>
</nav>

<div class="form-container">
    <form class="form-signin">
        <h1 id="SignInTxt">Iniciar Sesión</h1>
        <label for="nickname_usuario" class="SignInLabels">Usuario:</label>
        <input id="nickname_usuario" class="SignInValues" type="text" name="nickname_usuario">
        <label for="pass_usuario" class="SignInLabels">Contraseña:</label>
        <input id="pass_usuario" class="SignInValues" type="password" name="pass_usuario">
        <input type="hidden" name="accion" value="validar_login">
        <button class="SignInbtnIngresar" id="SignInBtn1" type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>

<?php }
}
