<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" id="minhaDiv" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Imperium Vastare - Controle seus gastos</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="shortcut icon" href="../img/favicon-aba.svg">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../css/demo.css" />
    <link rel="stylesheet" href="../css/cards.css">

    <!-- Animações CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="../index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                        <i><img style="transform:scale(290%)" src="img/Icone_title.jpg" alt=""></i>
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
                        <a href="../index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Página Inicial</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Páginas</span>
                    </li>
                    <li class="menu-item">
                        <a href="../conteudo.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Conteúdos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../meusgastos.php" class="menu-link">
                                    <div data-i18n="Account">Meus Gastos</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../forum.php" class="menu-link">
                                    <div data-i18n="Notifications">Fórum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="../meusgastos.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Meus Gastos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../forum.php" class="menu-link menu-toggle">
                            <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                    <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                                </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div data-i18n="Misc">Fórum</div>
                        </a>

                    <li class="menu-item">
                        <a href="../equipe.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Equipe</div>
                        </a>


                    <li class="menu-item">
                        <a href="../suporte.php" class="menu-link menu-toggle">
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
                                        <img src="../img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="../meuperfil.php">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../img/fotodeperfil.svg" alt class="w-px-40 h-auto rounded-circle" />
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
                                        <a class="dropdown-item" href="../meuperfil.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Meu Perfil </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../config/sair.php">
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
                <!-- conteudo/ cartões -->

                <style>
                    /* Reset de estilos */
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    /* Estilos gerais */
                    body {
                        background-color: #f0f0f0;
                        margin: 0;
                    }

                    .container {
                        max-width: 960px;
                        margin: 0 auto;
                        padding: 20px;
                    }

                    /* Estilos das seções de conteúdo */
                    .content {
                        background-color: #fff;
                        padding: 20px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        margin-bottom: 20px;
                        opacity: 0;
                        transform: translateY(20px);
                        transition: opacity 0.5s ease, transform 0.5s ease;
                    }

                    .content h2 {
                        color: #333;
                        font-size: 24px;
                        margin-bottom: 10px;
                    }

                    .content p {
                        color: #666;
                        font-size: 16px;
                        line-height: 1.5;
                    }
                </style>
                </head>

                <body>
                    <div class="container">
                        <!-- Seções de Conteúdo -->
                        <style>
                            #sub {
                                margin-left: 10px;
                            }

                            #subtxt {
                                margin-left: 22px;
                            }
                        </style>
                        <div class="content">
                            <h1>Importância dos Seguros</h1>
                            <p>Os seguros desempenham um papel fundamental na proteção financeira das pessoas e empresas contra riscos e imprevistos. Eles oferecem paz de espírito, ajudando a enfrentar despesas inesperadas. Aqui estão alguns aspectos importantes relacionados à importância dos seguros:</p>
                        </div>
                        <div class="content">
                            <h1>Tipos de Seguros</h1>
                            <p>Existem diversos tipos de seguros, cada um projetado para cobrir riscos específicos. Abaixo, descrevemos os principais tipos de seguros que as pessoas e empresas podem adquirir:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Seguro de Vida:</strong> Oferece proteção financeira aos beneficiários em caso de morte do segurado.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Seguro de Saúde:</strong> Ajuda a cobrir despesas médicas, hospitalares e odontológicas, proporcionando assistência em momentos de doença ou lesão.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Seguro de Automóvel:</strong> Protege contra danos e perdas relacionados a acidentes de trânsito e outros incidentes envolvendo veículos.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Seguro Residencial:</strong> Oferece cobertura para danos à casa e pertences, bem como responsabilidade civil em caso de acidentes domésticos.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Seguro Empresarial:</strong> Protege empresas contra riscos, incluindo propriedade, responsabilidade civil e interrupção de negócios.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Seguro de Viagem:</strong> Oferece assistência em viagens, incluindo cobertura para cancelamento de viagem, bagagem perdida e despesas médicas no exterior.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h1>Benefícios dos Seguros</h1>
                            <p>A aquisição de seguros oferece uma série de benefícios importantes. Aqui estão alguns dos principais benefícios dos seguros:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Proteção Financeira:</strong> Os seguros ajudam a proteger seu patrimônio e ativos financeiros contra perdas catastróficas.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Redução de Riscos Financeiros:</strong> Ao transferir riscos para uma seguradora, você reduz o impacto financeiro de eventos imprevisíveis.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Segurança da Família:</strong> Seguros de vida e saúde garantem o bem-estar financeiro da família em caso de tragédias.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Conformidade Legal:</strong> Alguns seguros, como o seguro automóvel, são obrigatórios por lei em muitos lugares.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Paz de Espírito:</strong> Saber que você está protegido contra eventos imprevistos proporciona tranquilidade.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h1>Escolhendo o Seguro Certo</h1>
                            <p>Selecionar o seguro adequado requer consideração cuidadosa das suas necessidades e circunstâncias. Aqui estão algumas dicas para escolher o seguro certo:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Avalie suas Necessidades:</strong> Determine quais riscos você deseja proteger e quais são as prioridades em sua vida ou negócios.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Compare Opções:</strong> Pesquise e compare várias seguradoras para obter as melhores taxas e coberturas.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Leia as Condições:</strong> Leia e entenda as condições e cláusulas do contrato de seguro antes de assinar.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Considere o Custo e o Benefício:</strong> Avalie o custo do prêmio em relação à cobertura oferecida pelo seguro.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Consulte um Corretor:</strong> Se necessário, consulte um corretor de seguros para obter orientação especializada.</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <script>
                        // JavaScript para animar as divs após o carregamento da página
                        window.onload = function() {
                            const contentDivs = document.querySelectorAll('.content');

                            contentDivs.forEach((div, index) => {
                                setTimeout(() => {
                                    div.style.opacity = '1';
                                    div.style.transform = 'translateY(0)';
                                }, 300 * (index + 1));
                            });
                        };
                    </script>
                </body>
                <!-- conteudo/ cartões -->

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->


            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="../js/jquery.js"></script>
            <script src="../js/popper.js"></script>
            <script src="../js/bostap.js"></script>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="../js/menu.js"></script>
            <!-- endbuild -->



            <!-- Main JS -->
            <script src="../js/main.js"></script>


            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>