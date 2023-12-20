@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  

     

  <div class="card-body">
    

    

    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header" >
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="../dist/img/avatar2.png" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h2 class="widget-user-desc">Apprenant:  {{$affecte->apprenant->nom}}   {{$affecte->apprenant->prenom}} </h5>
        
            <h3 class="widget-user-username">Structure:{{$affecte->centreformation->denomination}}</h3>
            
          
          </div>
          <div class="card-footer p-0">
         
            <ul class="nav flex-column">

             <li class="nav-item">
                <a href="#" class="nav-link">
                  Matricule <span class="float-right badge bg-info">{{$affecte->apprenant->matricule}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Sexe <span class="float-right badge bg-info">{{$affecte->apprenant->sexe}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Contact <span class="float-right badge bg-info">{{$affecte->apprenant->contact}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Intitulé Projet Installation <span class="float-right badge bg-info"> {{$affecte->libelleProjetInstallation}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Structure Formation <span class="float-right badge bg-info">{{$affecte->centreformation->denomination}}</span>
                </a>
              </li>

            </ul>
           
          </div>
        </div>
    
        <div class="row">
          <div class="col-6">
            <a href="{{url('/projet-installations')}}" class="btn btn-primary"><i  class="fa fa-arrow-left"></i></a>
          </div>
         
        </div>

      </div>
  
    </div>
 
</div>
</div>



@endsection