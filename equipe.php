<?php
include_once('config.php');

?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.php" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <i><img src="img/favicon-aba.svg" alt=""></i>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Imperium <br>Vastare </span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" onclick="removeClasse()">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Página Inicial</div>
                    </a>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Páginas</span>
                </li>
                <li class="menu-item">
                    <a href="conteudo.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Conteúdos</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="meusgastos.php" class="menu-link">
                                <div data-i18n="Account">Meus Gastos</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-notifications.html" class="menu-link">
                                <div data-i18n="Notifications">Fórum</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="meusgastos.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                        <div data-i18n="Authentications">Meus Gastos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forum.php" class="menu-link menu-toggle">
                        <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                            </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div data-i18n="Misc">Fórum</div>
                    </a>

                <li class="menu-item active">
                    <a href="equipe.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                        <div data-i18n="Misc">Equipe</div>
                    </a>


                <li class="menu-item">
                    <a href="suporte.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-support"></i>
                        <div data-i18n="Support">Suporte</div>
                    </a>
                </li>

            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" onclick="adicionarClasse()">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                <!-- <ul class="navbar-nav flex-row align-items-center ms-auto">

          
         Style Switcher
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class="bx bx-sm bx-moon"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Página Inicial</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Páginas</span>
                    </li>
                    <li class="menu-item">
                        <a href="conteudo.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Conteúdos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="meusgastos.php" class="menu-link">
                                    <div data-i18n="Account">Meus Gastos</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forum.php" class="menu-link">
                                    <div data-i18n="Notifications">Fórum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="meusgastos.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Meus Gastos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum.php" class="menu-link menu-toggle">
                            <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                    <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                                </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div data-i18n="Misc">Fórum</div>
                        </a>

                    <li class="menu-item">
                        <a href="equipe.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Equipe</div>
                        </a>

                    
                    <li class="menu-item">
                        <a href="suporte.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Suporte</div>
                        </a>
                    </li>
          

        </ul>-->
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">


                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="meuperfil.php">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block"><?php echo $row['user'] ?></span>
                                                <small class="text-muted">Usuário</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="meuperfil.php">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Meu Perfil </span>
                                    </a>
                                </li>

                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="config/sair.php">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Sair</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Conteudo do site-->
            <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Equipe - EducaFinanças</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .team-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .team-member-card {
            width: 300px; /* Largura fixa */
            height: 300px; /* Altura fixa */
            background-color: #ccc;
            border-radius: 10px;
            animation: slide-up 0.7s ease-in-out;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s;
            padding: 20px;
            text-align: center;
            margin: 10px; /* Espaçamento igual em todos os lados */
        }

        .team-member-card:hover {
            transform: scale(1.1);
            background-color: #EBF0F9;
            box-shadow: 0px 0px 15px 1px rgba(0, 0, 0, 0.2);
        }

        .team-member-icon {
            width: 120px; /* Aumentando o tamanho do ícone para 120px */
            height: 120px; /* Aumentando o tamanho do ícone para 120px */
            border-radius: 50%;
            scale: 130%;
            padding-top:10px ;
            padding-left:27% ;
          
            
        }

        .team-member-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .team-member-name {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .team-member-role {
            font-size: 1rem;
            margin: 5px 0;
        }

        .team-member-social {
            margin-top: 20px;
        }

        .team-member-social a {
            font-size: 1.5rem;
            margin: 0 10px;
        }
        
        @keyframes slide-up {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <section class="team-section">
        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/Fernando.png" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
                Fernando Humberto
            </div>
            <div class="team-member-role">
                Desenvolvedor Full-Stack
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/Rhayssa.jpg" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
                Rhayssa Florêncio
            </div>
            <div class="team-member-role">
                Analista Funcional
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/Thay.jpg" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
                Thaynara Oliveira
            </div>
            <div class="team-member-role">
                Cargo do Terceiro Membro
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/Kinho.jpg" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
                Marco Davi
            </div>
            <div class="team-member-role">
                Desenvolvedor Full-Stack
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/dan.jpg" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
                Danilo Gusmão
            </div>
            <div class="team-member-role">
                Desenvolvedor Full-Stack
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="team-member-card">
            <div class="team-member-icon">
                <img class="team-member-image" src="img/gab.jpg" alt="Ícone de perfil redondo">
            </div>
            <div class="team-member-name">
               Gabriel Fernando
            </div>
            <div class="team-member-role">
               Dev
            </div>
            <div class="team-member-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </section>
</body>
</html>





            <!-- Conteudo do site -->


            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->


        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bostap.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="js/menu.js"></script>
        <!-- endbuild -->



        <!-- Main JS -->
        <script src="js/main.js"></script>


        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        </body>

        </html>