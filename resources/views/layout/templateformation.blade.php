
<!DOCTYPE html>
<html lang="en">
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

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class=" navbar navbar-expand navbar-white navbar-light" style="background-color: #926d27">

    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('/img/armoirie.jpg')}}" class="img-circle" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-home fa-2x icon_color" ></i> Infrastructures
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Type infrasctructures</a>
            <a class="dropdown-item" href="#">Type aménagement</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Infrastructures</a>
            <a class="dropdown-item" href="#">Aménagements</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fa fa-link fa-2x icon_color"></i> Affectations
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Affecter un apprenant</a>
            <a class="dropdown-item" href="#">Affecter un formateur</a>
            <a class="dropdown-item" href="#">Affecter une formation</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-users fa-2x icon_color"></i> Installations
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">type d'installation</a>
            <a class="dropdown-item" href="#">Kits</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Fin de formation</a>
            <a class="dropdown-item" href="#">Installation</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-graduation-cap fa-2x icon_color"></i> Formations
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/formateurs')}}">Formateurs</a>
            <a class="dropdown-item" href="{{url('/apprenants')}}">Apprenant(es)</a>
            <a class="dropdown-item" href="{{ url('formations') }}">Formations</a>
            <a class="dropdown-item" href="{{url('/centre-formation')}}">Centre de formations</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-cog fa-2x icon_color"></i> Parametrages
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/specialites')}}">Spécialités</a>
            <a class="dropdown-item" href="{{url('/contributions')}}">Contributions</a>
            <a class="dropdown-item" href="{{url('/public-cible')}}">Publique cible</a>
            <a class="dropdown-item" href="{{url('niveau-recrutement')}}">Niveau de recrutement</a>
            <a class="dropdown-item" href="{{url('/condition-access')}}">Conditions d'accès</a>
            <a class="dropdown-item" href="{{url('/approche-pedagogique')}}">Approches pedagogiques</a>
            <a class="dropdown-item" href="{{url('/domaine-formation')}}">domaine de formations</a>
            <a class="dropdown-item" href="{{'/type-formation'}}">Type de formations</a>
            <a class="dropdown-item" href="{{url('/regimes')}}">Regimes</a>
            <a class="dropdown-item" href="{{url('/niveau-instructions')}}">Niveau d'instructions</a>
            <a class="dropdown-item" href="{{url('/promoteurs')}}">Promoteurs</a>
            <a class="dropdown-item" href="{{url('/gestionnaires')}}">Gestionnaires</a>
            <a class="dropdown-item" href="{{url('/source-financement')}}">Source financement</a>
           
          </div>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-gavel fa-2x icon_color"></i> Decoupage administratif
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/regions')}}">Regions</a>
            <a class="dropdown-item" href="{{url('/provinces')}}">Provinces</a>
            <a class="dropdown-item" href="{{url('/communes')}}">Communes</a>
            <a class="dropdown-item" href="{{url('/villages')}}">Villages</a>
          </div>
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
  <footer  style="background-color: #926d27; color: white;height: 100px;" align='center'>
    <strong >Copyright &copy; 2019-2020 <a href="http://adminlte.io">DGFOMR</a>.</strong>
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
<script src="{{asset('dist/js/selectscript.js')}}"></script>
</body>
</html>

  </div>
</div>
