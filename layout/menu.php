<?php require_once('./variaveis-ambiente.php'); ?>

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
                            (18) 3222-4299
                        </a>
                    </div>
                    <!-- <div class="header-nav-features d-none d-md-block">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex align-items-center">
                                    <a href="#" class="header-nav-features-toggle text-color-dark font-weight-semibold text-decoration-none ms-1" data-focus="headerSearch">
                                        <i class="icons icon-magnifier header-nav-top-icon font-weight-semibold text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                                        Search
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0 top-10 right-0" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <button class="btn" type="submit">
                                                    <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
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
                                                <a class="nav-link <?php echo ($url[4] == 'index.php' ? 'active' : '') ?>" href="index.php">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($url[4] == 'preencher-curriculum.php' ? 'active' : '') ?>" href="preencher-curriculum.php">
                                                    Preencher Curriculum
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($url[4] == 'empresa.php' ? 'active' : '') ?>" href="empresa.php">
                                                    Empresa </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link dropdown-toggle <?php echo ($url[4] == 'servicos.php' ? 'active' : '') ?>" href="servicos.php">
                                                    Serviços
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($url[4] == 'informacoes.php' ? 'active' : '') ?>" href="informacoes.php">
                                                    Informações
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($url[4] == 'videos.php' ? 'active' : '') ?>" href="videos.php">
                                                    Vídeos
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link <?php echo ($url[4] == 'publicacoes.php' ? 'active' : '') ?>" href="publicacoes.php">
                                                    Publicações
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php if ($url[4] != 'contato.php') { ?>
                                <div>
                                    <a href="contato.php" class="position-relative top-5 btn btn-outline btn-rounded btn-secondary text-2 font-weight-bold text-uppercase px-5 btn-py-2 mb-3">CONTATO</a>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            <?php } else ?>
                            <?php { ?>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>