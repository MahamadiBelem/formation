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
              <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Matricule:{{$apprenant->matricule}}</h3>
            <h5 class="widget-user-desc">Nom & Prenom:{{$apprenant->nom}}   {{$apprenant->prenom}}</h5>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Date de naissance <span class="float-right badge bg-info">{{date('d-m-Y',strtotime($apprenant->dateNaissance))}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Sexe <span class="float-right badge bg-info">{{$apprenant->sexe}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Contact <span class="float-right badge bg-info">{{$apprenant->contact}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Situation matrimoniale <span class="float-right badge bg-info"> {{$apprenant->situationMatrimoniale}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Commune <span class="float-right badge bg-info">{{$apprenant->commune->libelleCommune}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Niveau d'instruction <span class="float-right badge bg-info">{{$apprenant->niveauinstructions->libelleNiveauInstruction}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Nombre d'enfant <span class="float-right badge bg-info"> {{$apprenant->nombreEnfant}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Localités<span class="float-right badge bg-info"> {{$apprenant->localites}}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
    
        <div class="row">
          <div class="col-6">
            <a href="{{url('/apprenants')}}" class="btn btn-primary"><i  class="fa fa-arrow-left"></i></a>
          </div>
         
        </div>

      </div>
  
    </div>
 
</div>
</div>



@endsection