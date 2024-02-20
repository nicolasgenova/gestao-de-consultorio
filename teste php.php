<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/login.ico" type="image/x-icon">
</head>
<body>
        <div class="main-login">
            <div class="left-login">
                <h1>Bem Vindo(a)!<br></h1>
                <img src="nutricao.svg" class="left-login-image" alt="Nutrição Animação">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <form method="POST" action="google.com">
                        <input type="text" name="mail" placeholder="E-mail">
                        <input type="password" name="password" placeholder="Senha" id="campoSenha">
                        </form>
                        <script>
                            function validarFormulario() {
                                var campoSenha = document.getElementById("campoSenha").value;
                    
                                if (campoSenha === "") {
                                    alert("Campo ''Senha'' deve ser preenchido");
                                    return false; 
                                } else {
                                    alert("Campo preenchido corretamente");
                                    return true; 
                                }
                            }
                        </script>
                    </div>
                    <button type="submit" class="btn-login" name="login" id="botaologin">Login</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>