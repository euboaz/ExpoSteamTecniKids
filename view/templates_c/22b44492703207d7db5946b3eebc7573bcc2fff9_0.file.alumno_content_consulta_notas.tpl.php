<?php
/* Smarty version 4.3.4, created on 2024-06-13 06:39:52
  from 'C:\xampp\htdocs\proyecto_ExpoSteamTecniKids\view\templates\alumno_content_consulta_notas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a7818b5c827_54543625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b44492703207d7db5946b3eebc7573bcc2fff9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_ExpoSteamTecniKids\\view\\templates\\alumno_content_consulta_notas.tpl',
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
function content_666a7818b5c827_54543625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:alumno_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<div id="contenidoHTML_cuatro"></div>
<?php echo '<script'; ?>
>
    alumno_consultar_notas();
<?php echo '</script'; ?>
>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:alumno_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
