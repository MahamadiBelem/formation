@extends('layout.template')

@section('content')
<div style="margin-top: 10%;margin-left:-40%; ">
	<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{url('/formation')}}">
      <div class="info-box">
        <span class="info-box-icon bg-info">
         <img src="{{asset('img/icon_formation.png')}}" alt="">
        </span>

        <div class="info-box-content">
          <span class="info-box-text formation_panel" >Gestion de la formation</span>
          <span class="info-box-number">
            
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="#">
      <div class="info-box">
        <span class="info-box-icon bg-success">
          <img src="{{asset('img/icon_foncier.png')}}" alt="">
        </span>

        <div class="info-box-content">
          <span class="info-box-text foncier_panel" style="color:#28a745">Gestion du foncier rural</span>
          <span class="info-box-number">

          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning">
          <img src="{{asset('img/icon_foncier.png')}}" alt="">
        </span>

        <div class="info-box-content">
          <span class="info-box-text">Gestion organisation paysante</span>
          <span class="info-box-number">

          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
   
  </div>
 
    
</div>

@endsection