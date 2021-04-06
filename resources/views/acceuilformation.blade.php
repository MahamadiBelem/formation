@extends('layout.templateformation')

@section('content')
<div style="margin-top: 10%;margin-left:-40%; ">
	<div class="row">
   <div class="col-8">
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-graduation-cap fa-2x"></i>
        Formation 
      </h3>
      <div class="card-tools">
        <ul class="nav nav-pills ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Diagramme circulaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sales-chart" data-toggle="tab">Diagramme en batons</a>
          </li>
        </ul>
      </div>
    </div><!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content p-0">
        <!-- Morris chart - Sales -->
        <div class="chart tab-pane active" id="revenue-chart"
             style="position: relative; height: 300px;">
            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
         </div>
        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
          <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
        </div>
      </div>
    </div><!-- /.card-body -->
  </div>
   </div>
  </div>   
</div>

@endsection