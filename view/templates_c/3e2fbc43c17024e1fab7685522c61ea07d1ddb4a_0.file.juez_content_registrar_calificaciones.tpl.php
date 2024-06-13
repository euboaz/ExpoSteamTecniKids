<?php
/* Smarty version 4.3.4, created on 2024-06-13 07:29:52
  from 'C:\xampp\htdocs\prueba123456\view\templates\juez_content_registrar_calificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a83d03994f9_73004174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2fbc43c17024e1fab7685522c61ea07d1ddb4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba123456\\view\\templates\\juez_content_registrar_calificaciones.tpl',
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
function content_666a83d03994f9_73004174 (Smarty_Internal_Template $_smarty_tpl) {
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
