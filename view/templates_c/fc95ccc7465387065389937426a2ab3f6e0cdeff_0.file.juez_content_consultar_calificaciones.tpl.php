<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:29:52
  from 'C:\xampp\htdocs\prueba123456\view\templates\juez_content_consultar_calificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a83d0c22ee5_72057206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc95ccc7465387065389937426a2ab3f6e0cdeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba123456\\view\\templates\\juez_content_consultar_calificaciones.tpl',
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
function content_666a83d0c22ee5_72057206 (Smarty_Internal_Template $_smarty_tpl) {
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
