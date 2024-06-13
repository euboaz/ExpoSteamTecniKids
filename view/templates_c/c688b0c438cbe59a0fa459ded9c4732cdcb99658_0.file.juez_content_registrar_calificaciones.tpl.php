<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:31:45
  from 'C:\xampp\htdocs\ExpoSteamTecniKids\view\templates\juez_content_registrar_calificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a8441288bc8_59036408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c688b0c438cbe59a0fa459ded9c4732cdcb99658' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExpoSteamTecniKids\\view\\templates\\juez_content_registrar_calificaciones.tpl',
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
function content_666a8441288bc8_59036408 (Smarty_Internal_Template $_smarty_tpl) {
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
