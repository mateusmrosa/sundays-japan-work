<?php require_once('./variaveis-ambiente.php') ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php

    switch ($url[4]) {
        case 'index.php':
            $title = 'Home';
            break;
        case 'preencher-curriculum.php':
            $title = 'Preencher Curriculum';
            break;
        case 'empresa.php':
            $title = 'Empresa';
            break;
        case 'servicos.php':
            $title = 'Serviços';
            break;
        case 'informacoes.php':
            $title = 'Informações';
            break;
        case 'videos.php':
            $title = 'Vídeos';
            break;
        case 'publicacoes.php':
            $title = 'Publicações';
            break;
        case 'contato.php':
            $title = 'Contato';
            break;
        case 'empregos.php':
            $title = 'Empregos';
            break;
        case 'traducao.php':
            $title = 'Tradução';
            break;
        case 'koseki-tohon.php':
            $title = 'Koseki Tohon';
            break;
        case 'shakai-hoken.php':
            $title = 'Shakai Hoken';
        case 'visto-cert-elegibilidade.php':
            $title = 'Visto e Certificado de Elegibilidade';
        default;
    }
    ?>

    <title><?php echo $title . ' - Sundays Japan Work'; ?></title>

    <meta name="keywords" content="Japão, Emprego, Trabalho, País, Viagem, Vida no Japão" />
    <meta name="description" content="Sunday's Japan Work - Empregos no Japão">
    <meta name="author" content="Mateus Martinez Rosa">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/logo/logo.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-insurance.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-insurance.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body>

    <div class="body">
        <?php require_once('./layout/menu.php'); ?>