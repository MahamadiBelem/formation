@extends('layout.templateformation')
<div style="background: #E8EAC8"> 
@section('content')

<div style="margin-top: 10%;margin-left:-45%; ">
	<div class="row">
   <div class="col-6">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header" style="background-color: #A7255E;color:white">
            <h3 class="card-title">Statistiques des données par catégorie</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            
          <div class="row" >
            <div class="card border-primary mb-3" style="width: 18rem;">
            <div class="card-header">Formateurs/enseignants</div>
            <div class="card-body text-primary">
                <h5 class="card-title">10</h5>
                <p class="card-text">Formateurs/enseignants</p>
            </div>
            </div>

            <div class="card border-secondary mb-3" style="width: 18rem;">
            <div class="card-header">Projet d’installation</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">50</h5>
                <p class="card-text">Projet d’installation</p>
            </div>
            </div>
            </div>
          <div class="row">
                <div class="card border-primary mb-3" style="width: 18rem;">
                <div class="card-header">Structures de formation</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">22</h5>
                    <p class="card-text">Structures de formation.</p>
                </div>
                </div>

                <div class="card border-secondary mb-3" style="width: 18rem;">
                <div class="card-header">Apprenants </div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">13</h5>
                    <p class="card-text">Apprenants</p>
                </div>
                </div>

                </div>  
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  </div>   
  <div class="col-6">
    <!-- BAR CHART -->
    <div class="card">
      <div class="card-header" style="background-color: #A7255E;color:white">
        <h3 class="card-title">Statistiques des données</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <div class="row" >
        <div class="card border-primary mb-3" style="width: 18rem;">
        <div class="card-header">Formateurs/enseignants</div>
        <div class="card-body text-primary">
            <h5 class="card-title">10</h5>
            <p class="card-text">Formateurs/enseignants</p>
        </div>
        </div>


        <div class="card border-secondary mb-3" style="width: 18rem;">
        <div class="card-header">Projet d’installation</div>
        <div class="card-body text-secondary">
            <h5 class="card-title">50</h5>
            <p class="card-text">Projet d’installation</p>
        </div>
        </div>
        </div>
      <div class="row" >
        <div class="card border-primary mb-3" style="width: 18rem;">
        <div class="card-header">Formateurs/enseignants</div>
        <div class="card-body text-primary">
            <h5 class="card-title">10</h5>
            <p class="card-text">Formateurs/enseignants</p>
        </div>
        </div>

        <div class="card border-secondary mb-3" style="width: 18rem;">
        <div class="card-header">Projet d’installation</div>
        <div class="card-body text-secondary">
            <h5 class="card-title">50</h5>
            <p class="card-text">Projet d’installation</p>
        </div>
        </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
<script src="{{asset('dist/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script>
  
</script>

<br>
<br>

</div>
@endsection
