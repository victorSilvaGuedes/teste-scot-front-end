<?php
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
} else {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-0 m-0" style="background-color: #295d2e;">
    <nav class="navbar navbar-expand-lg p-2" style="background-color: #e8a449;">
        <div class="container-fluid d-flex flex-column flex-lg-row align-items-center">
            <a class="navbar-brand" href="#">
                <img src="img\logo_sem_texto.png" alt="Logo" style="height: 50px;">
            </a>
            <div class="d-flex flex-column flex-lg-row gap-2 gap-lg-5">
                <a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 1</a>
                <a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 2</a>
                <a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 3</a>
                <a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 4</a>
            </div>
            <span class="d-flex gap-1 mt-3">Bem-vindo, <p class="fw-bold"> <?php echo $email; ?> </p>!</span>
        </div>
    </nav>

    <div class="container p-4 ">
        <h1 class="text-center text-white fs-1 mb-3 text-decoration-underline">Notícia em Destaque</h1>
        <div class="text-white">
            <div class="d-flex flex-column flex-lg-row gap-5">
                <div>
                    <h2>Fertilizantes biotecnológicos Superbac</h2>
                    <p>O fertilizante Superbac é biotecnológico! Isso significa que é um produto que envolve a manipulação de organismos vivos para fabricar ou modificar algo. Assim, ele se torna mais sustentável e mais produtivo. Desenvolvido com a ajuda de cientistas e pesquisadores, o fertilizante da Superbac faz com que a lavoura tenha melhor desempenho, de forma mais ecológica. Esse composto para nutrir a planta aprimora a cultura, produzindo mais em menos hectares. Isso faz a plantação ser mais sustentável! A Superbac leva a ciência a sério, tanto é que criou um Centro de Pesquisa para a Agricultura, em Mandaguari (PR), onde conta com uma fazenda experimental para testar os produtos. A intenção é almejar cada vez mais a produtividade e a sustentabilidade das lavouras brasileiras.</p>
                </div>
                <img src="img\fertilizante.png" class="img-fluid rounded" alt="fertilizante">
            </div>
            <div class="w-50 h-50 mx-auto mb-5">
                <video class="w-100 rounded" controls>
                <source src="video\video_fertilizante_superbac.mp4" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                </video>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom w-100 text-center py-2" style="background-color: #e8a449;">
        <p class="m-0">&copy; 2025 - Desenvolvido por Victor Silva Guedes</p>
    </footer>
</body>
</html>
