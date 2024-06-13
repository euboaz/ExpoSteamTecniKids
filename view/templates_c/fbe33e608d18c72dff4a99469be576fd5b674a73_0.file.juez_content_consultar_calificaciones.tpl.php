<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:03:57
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\juez_content_consultar_calificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a7dbdab56e3_81785191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe33e608d18c72dff4a99469be576fd5b674a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\juez_content_consultar_calificaciones.tpl',
      1 => 1718254897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:juez_head.tpl' => 1,
    'file:juez_body.tpl' => 1,
    'file:juez_footer.tpl' => 1,
  ),
),false)) {
function content_666a7dbdab56e3_81785191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:juez_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:juez_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<div id="contenidoHTML_cinco"></div>
<?php echo '<script'; ?>
>
    listar_asistencia();
<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:juez_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
