<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:03:56
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\juez_content_registrar_calificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a7dbc2e7ac3_28706348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e3e4f14f74facb2c843dfe9f5d6d1e13f3877e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\juez_content_registrar_calificaciones.tpl',
      1 => 1718254896,
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
function content_666a7dbc2e7ac3_28706348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:juez_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:juez_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <div id="contenidoHTML"></div>
    <?php echo '<script'; ?>
>
        js_client_api_alumno_consultar_horario();
    <?php echo '</script'; ?>
>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:juez_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
