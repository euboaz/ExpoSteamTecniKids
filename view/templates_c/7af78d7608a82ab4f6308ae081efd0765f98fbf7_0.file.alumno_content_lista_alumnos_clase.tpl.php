<?php
/* Smarty version 4.3.4, created on 2024-06-13 06:39:22
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\alumno_content_lista_alumnos_clase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a77fa031163_86960971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af78d7608a82ab4f6308ae081efd0765f98fbf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\alumno_content_lista_alumnos_clase.tpl',
      1 => 1713748088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumno_head.tpl' => 1,
    'file:alumno_body.tpl' => 1,
    'file:alumno_footer.tpl' => 1,
  ),
),false)) {
function content_666a77fa031163_86960971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:alumno_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <form method="PUT">
<input id="asignatura" type="text" placeholder="Ingrese la asignatura: ">
<button type="button" onclick="consulta_asignaturas()">Consultar</button>
    </form>
    <br>
    <div id="contenidoHTML_dos"></div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:alumno_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
