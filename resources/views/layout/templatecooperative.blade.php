<!DOCTYPE html>
<html lang="en">
<!-- CE TEMPLATE PREND EN COMPTE LES MENU DE LA PARTIE COEPERATIVE -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>DGFOMR</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/js/example-styles.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/print.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/accueil_style.css')}}">
<!--
    <style>
        .dropdown-submenu{
            position: relative;
        }
        .dropdown-submenu .dropdown-menu{
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
-->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class=" navbar navbar-expand navbar-white navbar-light" style="background-color: #28a745;">

            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('/img/armoirie.jpg')}}" class="img-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    @hasanyrole('role-admin-formation|role-admin-formation|role-admin-principal')
                    <li class="nav-item dropdown">
                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog fa-2x"></i>Paramétrages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/formejuridique')}}">Formes Juridiques</a>
                            <a class="dropdown-item" href="{{url('/activiteorgane')}}">Activités des organes</a>
                            <a class="dropdown-item" href="{{url('/filiere')}}">Filières</a>
                            <a class="dropdown-item" href="{{url('/maillon')}}">Maillons</a>
                            <a class="dropdown-item" href="{{url('/genre')}}">Secteurs d'activité</a>
                            <a class="dropdown-item" href="{{url('/typeorganisation')}}">Types Organisations</a>
                            <a class="dropdown-item" href="{{url('/regionsc')}}">Regions</a>
                            <a class="dropdown-item" href="{{url('/provincesc')}}">Provinces</a>
                            <a class="dropdown-item" href="{{url('/communesc')}}">Communes</a>

                        </div>
                    </li>

                    @endhasanyrole

                    <li class="nav-item dropdown">
                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-graduation-cap fa-2x"></i> Identification OPA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/association')}}">Associations</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/chambreRegionale')}}">Chambres régionales</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/cooperative')}}">Cooperatives</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-home fa-2x"></i> Gestions
                        </a>
                        <ul class="dropdown-menu multi" aria-labelledby="navbarDropdown">
                            <li class="dropdown-submenu">
                                    <a style="color: black" class="nav-link dropdown-toggle" href="#">Gestion des associations</a>
                                        <ul>
                                            <li class="dropdown-item"><a href="{{url('/activite')}}">Activités</a></li>
                                            <li class="dropdown-item"><a href="{{url('/bureauexecutifassociation')}}">Bureau Executif</a></li>
                                            <li class="dropdown-item"><a href="{{url('/commissariataucompteassociation')}}">Commissariat au Compte</a></li>
                                            <li class="dropdown-item"><a href="{{url('/fonctionnementassociation')}}">Fonctionnement</a></li>
                                            <li class="dropdown-item"><a href="{{url('/secretariatexecutifassociation')}}">Secrétariat Exécutif</a></li>
                                        </ul>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="dropdown-submenu">
                                    <a style="color: black" class="nav-link dropdown-toggle" href="#">Gestion des chambres regionales</a>
                                        <ul>
                                            <li class="dropdown-item"><a href="{{url('/assembleeConsulaire')}}">Assemblées Consulaires</a></li>
                                            <li class="dropdown-item"><a href="{{url('/bureauExecutif')}}">Bureau Exécutif</a></li>
                                            <li class="dropdown-item"><a href="{{url('/commissionPermanante')}}">Commissions Permanentes</a></li>
                                            <li class="dropdown-item"><a href="{{url('/rencontreStatutaire')}}">Rencontres Statutaires</a></li>
                                            <li class="dropdown-item"><a href="{{url('/secretariatExecutif')}}">Secrétariat Exécutif</a></li>
                                        </ul>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="dropdown-submenu">
                                    <a style="color: black" class="nav-link dropdown-toggle" href="#">Gestion des cooperatives</a>
                                        <ul>
                                            <li class="dropdown-item"><a href="{{url('/fonctionementorganecooperative')}}">Organes Cooperatives</a></li>
                                            <li class="dropdown-item"><a href="{{url('/organegestion')}}">Organes Gestions </a></li>
                                            <li class="dropdown-item"><a href="{{url('/organecontrole')}}">Organes Controles</a></li>
                                            <li class="dropdown-item"><a href="{{url('/secretariatexecutif')}}">Secrétariat Exécutif</a></li>
                                        </ul>
                                </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-book fa-2x"></i>Statistiques
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/laravel_google_chart')}}">Genres</a>
                            <a class="dropdown-item" href="{{url('/chartanne')}}">Cooperatives par années de creation </a>
                            <a class="dropdown-item" href="{{url('charttype')}}">Types Organisations</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="color: white" href="{{url('/')}}">
                            <i class="fa fa-arrow-left fa-2x icon_color"></i>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->


        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <section class="content">
                            <div class="container-fluid">
                                @yield('content')
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20%;">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <!-- Main Footer -->
                <footer style="background-color: #28a745;; color: white;height: 100px;" align='center'>
                    <strong>Copyright &copy; 2021-2022 <a style="background-color: white href= " http://adminlte.io">DGFOMR</a>.</strong>
                    All rights reserved.

                </footer>
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="{{asset('dist/js/jquery-3.5.1.min.js')}}"></script>
            <!-- Bootstrap -->
            <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- overlayScrollbars -->
            <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('dist/js/adminlte.js')}}"></script>

            <!-- OPTIONAL SCRIPTS -->
            <script src="{{asset('dist/js/demo.js')}}"></script>

            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
            <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
            <script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
            <script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
            <!-- ChartJS -->
            <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

            <!-- PAGE SCRIPTS -->
            <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

            <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
            <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
            <script src="{{asset('dist/js/scriptdatable.js')}}"></script>
            <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
            <script src="{{asset('dist/js/verifier.js')}}"></script>
            <script src="{{asset('dist/js/jquery.multi-select.js')}}"></script>
            <script src="{{asset('dist/js/jquery.multi-select.min.js')}}"></script>
            <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
            <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
            <script src="{{asset('dist/js/print.min.js')}}"></script>
            <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- Select2 -->
            <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
            <script src="{{asset('dist/js/saveComposition.js')}}"></script>
            <script src="{{asset('dist/js/select2digned.js')}}"></script>
            <script src="{{asset('dist/js/selectscript.js')}}"></script>
            <script src="{{asset('dist/js/statistique.js')}}"></script>

<!--
            <script>
                window.onload = () => {
                    let menus = document.querySelectorAll(".dropdown-submenu a.dropdown-toggle")
                    for (let menu of menus){
                        menu.addEventListener("hover", function(e){
                            e.stopPropagation()

                            let sousmenus = document.querySelectorAll(".multi .dropdown-menu")
                            for (let sousmenu of sousmenus){
                                    sousmenu.style.display = "none"
                            }

                            this.nextElementSibling.style.display = "initial"
                        })
                    }
                }
            </script>
    -->

</body>

</html>

</div>
</div>
.

