<?php
session_start();

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

	#regex para validar email
    $email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

	#regex para validar a senha (pelo menos 8 caracteres, letra maiúscula, minúscula, número e caractere especial)
	$senha_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

    if (!preg_match($email_regex, $email)) {
        $erro = "Formato de e-mail inválido.";
    } elseif (!preg_match($senha_regex, $password)) {
        $erro = "A senha deve ter pelo menos 8 caracteres, incluindo letra maiúscula, minúscula, número e caractere especial.";
    } else {
        $_SESSION['email'] = $email;
        header("Location: portal.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Scot Consultoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <img src="img/logo.png" alt="logo scot" width="400" height="400" />
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required />
            </div>
            <?php if ($erro): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $erro ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php endif; ?>
            <button type="submit" class="btn w-100 btn-primary">Entrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>