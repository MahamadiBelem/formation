@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">details de l'apprenant {{$apprenant->nom}} {{$apprenant->prenom}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for=""><strong>Matricule</strong></label>
              <span>: {{$apprenant->matricule}}</span>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Nom</label>
              <span>: {{$apprenant->nom}}</span>
              
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Prenom</label>
              <span>: {{$apprenant->prenom}}</span>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Date naissance</label>
              <span>: {{$apprenant->dateNaissance}}</span>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Sexe</label>
              <span>: {{$apprenant->sexe}}</span>
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Contact</label>
              <span>: {{$apprenant->contact}}</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">situation matrimoniale</label>
              <span>: {{$apprenant->situationMatrimoniale}}</span>
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="communes">Commune</label>
               
                <span>:{{$apprenant->commune->libelleCommune}}</span>
               
              
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="promoteurs">niveau d'instruction:</label>
             
               <br>
                <span>{{$apprenant->niveauinstructions->libelleNiveauInstruction}}</span>
              
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="gestionnaires">Nombre d'enfant:</label>
             <br>
                 {{$apprenant->nombreEnfant}}
                  </span>
             
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Localités:</label>
             
             
                  <span>{{$apprenant->localites}} </span>
             
              
            </div>
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