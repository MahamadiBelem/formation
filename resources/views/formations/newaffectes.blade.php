@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-inscription')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Annees</label>
              <input  type="text"   name="annees" id="" class="form-control" placeholder="années d'inscription" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l annees inscription ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Date d incription </label>
              <input type="date"   name="dateInscription" id="" class="form-control" placeholder="Date d'inscription" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la date inscription ne doit pas être vide</span></small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="formations">Cycle de formation Formation</label>
              <select id="formations" class="form-control" name="formation_id">
               @foreach ($formations as $formation)
               <option value="{{$formation->id}}">{{$formation->libelleFormations}}</option>
               @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="apprenant">Apprenants</label>
              <select id="apprenant" class="form-control" name="apprenant_id">
               @foreach ($apprenants as $apprenant)
               <option value="{{$apprenant->id}}">matricule :{{$apprenant->matricule}} Nom:{{$apprenant->nom}} Prenom:{{$apprenant->prenom}}</option>
               @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="centre_formation">Centre de formation</label>
              <select id="centre_formation" class="form-control" name="centre_id">
               @foreach ($centres as $centre)
               <option value="{{$centre->id}}">{{$centre->denomination}}</option>
               @endforeach
              </select>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">structure de formation </label>
              <input type="select"   name="dateInscription" id="" class="form-control" placeholder="Date d'inscription" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la date inscription ne doit pas être vide</span></small>
            </div>
          </div>
         
        </div>
      <div class="modal-footer">
        <a href="{{url('/inscription')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  
  
</div>
</div>



@endsection