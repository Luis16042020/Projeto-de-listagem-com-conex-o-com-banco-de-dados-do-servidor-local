
<?php require_once 'cabecalho.php'?>
    <div class = "w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
        <div class = "w3-center">
            <br>
            <img src="img_usuario.png" alt="luis" style="width:40%" class = "w3-circle w3-margin top">
        </div>

        <form action="loginAction.php" class = "w3-container" method="post">
            <div class = "w3-section">
                <label style = "font-weight:bold;">Usuário</label>
                <input class = "w3-input w3-border w3-margin-bottom" type = "text" placeholder="Digite o nome:" name="txtNome" required>
                <label style = "font-weight:bold;">Senha</label>
                <input class = "w3-input w3-border" type="password" placeholder="Digite a senha:" name="txtSenha" required>
                <button class = "w3-button w3-block w3-teal w3-section w3-padding" type="submit">Entrar</button>
            </div>
        </form>
        <br>
    </div>
<?php require_once 'rodape.php'?>