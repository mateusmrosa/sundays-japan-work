<?php
require_once('./util/Funcoes.php');
$funcoes = new Funcoes();
?>

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickySetTop': '-70px', 'stickyChangeLogo': true}">
    <div class="header-body border-0 box-shadow-none">
        <div class="header-container container">
            <div class="header-row py-2">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo mb-0">
                            <a href="index.html">
                                <img alt="Sundays Japan Work" width="100" src="img/logo/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end align-items-center flex-row">
                    <!-- <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-dark social-icons-medium me-2 mb-0 d-none d-sm-block">
                                <li class="social-icons-instagram">
                                    <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                            </ul> -->
                    <div class="header-nav-features">
                        <a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1 me-3">
                            <i class="icon icon-phone text-4-5 me-2"></i>
                            (18) 3223-7080 | 99737-0033
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-nav-bar z-index-0">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row align-items-center justify-content-end">
                            <div class="header-nav header-nav-links justify-content-start mb-3">
                                <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']))  == 'index.php' ? 'active' : '' ?>" href="index.php">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'preencher-curriculum.php' ? 'active' : '') ?>" href="preencher-curriculum.php">
                                                    Preencher Curriculum
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'empresa.php' ? 'active' : '') ?>" href="empresa.php">
                                                    Empresa </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link dropdown-toggle <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'servicos.php' ? 'active' : '') ?>" href="servicos.php">
                                                    Servi??os
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'informacoes.php' ? 'active' : '') ?>" href="informacoes.php">
                                                    Informa????es
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'videos.php' ? 'active' : '') ?>" href="videos.php">
                                                    V??deos
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($funcoes::explodeUrl($_SERVER['SCRIPT_FILENAME']) == 'publicacoes.php' ? 'active' : '') ?>" href="publicacoes.php">
                                                    Publica????es
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div>
                                <a href="contato.php" class="position-relative top-5 btn btn-outline btn-rounded btn-secondary text-2 font-weight-bold text-uppercase px-5 btn-py-2 mb-3">CONTATO</a>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>