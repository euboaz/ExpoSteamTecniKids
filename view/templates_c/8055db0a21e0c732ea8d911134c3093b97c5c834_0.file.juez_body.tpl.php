<?php
/* Smarty version 4.3.4, created on 2024-06-13 06:59:36
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\juez_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a7cb8dfc027_06551874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8055db0a21e0c732ea8d911134c3093b97c5c834' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\juez_body.tpl',
      1 => 1718254675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666a7cb8dfc027_06551874 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_juez">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Botón cerrar sesión a la derecha -->
            <div class="d-flex justify-content-end">
                <form>
                    <input type="hidden" name="accion" value="menu_principal">
                    <button type="submit" class="btn btn-primary" onclick="cerrarSesion()">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>
    <input id="nickname_usuario" type="hidden" name="nickname_usuario" value="<?php echo $_smarty_tpl->tpl_vars['nickname_usuario']->value;?>
">
    <div class="container-fluid">
        <div class="columna1">
            <div id="fila2">
                <form>
                    <input type="hidden" name="accion" value="registro_calificaciones">
                    <button type="submit" class="boton_main">Registrar Calificaciones</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="consultar_calificaciones">
                    <button type="submit" class="boton_main">Consultar Calificaciones</button>
                </form>
            </div>
</div><?php }
}
