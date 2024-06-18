<?php
/* Smarty version 4.3.4, created on 2024-06-18 05:56:08
  from 'C:\xampp\htdocs\view\templates\login_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66710558381bd3_09277253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a910339821824602690552015d5fe41f3c6fdd27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\view\\templates\\login_body.tpl',
      1 => 1718682962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_head.tpl' => 1,
    'file:login_footer.tpl' => 1,
  ),
),false)) {
function content_66710558381bd3_09277253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<video autoplay muted loop id="videoBackground">
        <source src="resources/natureBackground.mp4" type="video/mp4">
        Tu navegador no soporta video HTML5.
    </video>

    <div class="welcome-message">
    <h1>Página oficial de resultados de la Expo STEAM 2024</h1>
    <p>Nos complace darte la bienvenida a este emocionante campeonato de robótica, donde la creatividad y la innovación alcanzan su máximo esplendor. Ya seas un entusiasta que sigue de cerca a su equipo favorito o simplemente un curioso de la robótica y la innovación, estamos aquí para guiarte en cada paso de esta jornada inspiradora.</p>
    <p>Acompáñanos en esta celebración de la ingeniería y la creatividad. ¡Que comience la Expo STEAM 2024!</p>
</div>
<div class="container-fluid">
     <div class="card-container">

            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Preescolar K'NEX">
                <a href="#" onclick="submitForm('PreescolarKNEX')">Preescolar K'nex</a>
            </div>
            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Preescolar PHOTON">
                <a href="#" onclick="submitForm('PreescolarPHOTON')">Preescolar Photon</a>
            </div>
            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Primaria Menor">
                <a href="#" onclick="submitForm('PrimariaMenor')">Primaria Menor</a>
            </div>
            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Primaria Mayor">
                <a href="#" onclick="submitForm('PrimariaMayor')">Primaria Mayor</a>
            </div>
            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Secundaria">
                <a href="#" onclick="submitForm('Secundaria')">Secundaria</a>
            </div>
            <div class="card">
                <img src="https://i.imgur.com/QHqxL5F_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Diversificado">
                <a href="#" onclick="submitForm('Diversificado')">Diversificado</a>
            </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    function submitForm(action) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '';
        const hiddenField = document.createElement('input');
        hiddenField.type = 'hidden';
        hiddenField.name = 'accion';
        hiddenField.value = action;
        form.appendChild(hiddenField);
        document.body.appendChild(form);
        form.submit();
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:login_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
