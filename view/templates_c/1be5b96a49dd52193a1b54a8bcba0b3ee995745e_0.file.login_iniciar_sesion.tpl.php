<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:26:31
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\login_iniciar_sesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a83078f1155_95479365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be5b96a49dd52193a1b54a8bcba0b3ee995745e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\login_iniciar_sesion.tpl',
      1 => 1718256384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666a83078f1155_95479365 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_principal">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
        </div>
    </nav>
            <div id="fila3">
                <form>
                    <h1 id="SingInTxt">Iniciar Sesión</h1>

                    <label class="SingInLabels">Usuario: </label>
                    <input class="SingInValues" type="text" name="nickname_usuario">
                    <label class="SingInLabels">Clave: </label>
                    <input class="SingInValues" type="password" name="pass_usuario">
                    <input type="hidden" name="accion" value="validar_login">
                    <button class="SingInbtnIngresar" id="SingInbtn1" type="submit">Ingresar</button>
                </form>
            </div>
</div><?php }
}
