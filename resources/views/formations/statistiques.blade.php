@extends('layout.templateformation')
<div style="background: #E8EAC8"> 
@section('content')

<div style="margin-top: 10%;margin-left:-45%; ">
	<div class="row" style="font-family: Times New Roman;font-weight: bold">
   <div class="col-6">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header" style="background-color: #007bff;color:white;">
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
            <div class="card-header">Nombre de Region</div>
            <div class="card-body text-primary">
                <h5 class="card-title">{{$total}}</h5>
                <p class="card-text">Nombre de Region</p>
            </div>
            </div>

            <div class="card border-secondary mb-3" style="width: 18rem;">
            <div class="card-header">Nombre Formateurs</div>
            <div class="card-body text-secondary">
                <h5 class="card-title">{{$totalformateurs}}</h5>
                <p class="card-text">Nombre Formateurs</p>
            </div>
            </div>
            </div>
          <div class="row">
                <div class="card border-primary mb-3" style="width: 18rem;">
                <div class="card-header">Nombre Apprenants</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">{{$totalapprenants}}</h5>
                    <p class="card-text">Nombre Apprenants.</p>
                </div>
                </div>

                <div class="card border-secondary mb-3" style="width: 18rem;">
                <div class="card-header">Nombre Projet Installation </div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">{{$totalprojet}}</h5>
                    <p class="card-text">Nombre Projet Installation</p>
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
      <div class="card-header" style="background-color: #007bff;color:white;">
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
        <div class="card-header">Nombre de modules</div>
        <div class="card-body text-primary">
            <h5 class="card-title">{{$totalmodule}}</h5>
            <p class="card-text">Nombre de modules</p>
        </div>
        </div>


        <div class="card border-secondary mb-3" style="width: 18rem;">
        <div class="card-header">Nombre Structure de formations</div>
        <div class="card-body text-secondary">
            <h5 class="card-title">{{$totalcentre}}</h5>
            <p class="card-text">Nombre Structure de formations</p>
        </div>
        </div>
        </div>
      <div class="row" >
        <div class="card border-primary mb-3" style="width: 18rem;">
        <div class="card-header">Source de Financements</div>
        <div class="card-body text-primary">
            <h5 class="card-title">{{$sourcetotal}}</h5>
            <p class="card-text">Source de Financements</p>
        </div>
        </div>

        <div class="card border-secondary mb-3" style="width: 18rem;">
        <div class="card-header">Cycle de formations</div>
        <div class="card-body text-secondary">
            <h5 class="card-title"> {{$cyletotal}}</h5>
            <p class="card-text">Cycle de formationns</p>
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
