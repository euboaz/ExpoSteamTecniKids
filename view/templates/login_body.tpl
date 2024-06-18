{include file="login_head.tpl"}

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

<script>
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
</script>
{include file="login_footer.tpl"}
