@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-installation')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une installation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Inscription</label>
              <select  class="form-control" name="inscription" id="installation_affecte">
                
                @foreach ($affectes as $affecte)
                <option value="{{$affecte->id}}">Matricule:{{$affecte->apprenant->matricule}} Nom:{{$affecte->apprenant->nom}}  Prenom:{{$affecte->apprenant->prenom}}  Formation:{{$affecte->formation->libelleFormations}} </option>
                @endforeach
                
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Date fin de formation</label>
              <input type="date"   name="dateFinFormation" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">selectionner la date de fin est obligatoire</span></small>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Domaine d'installation</label>
              <select name="domaine_installation" id="domaine_installation" class="form-control">
                @foreach ($domaines as $domaine)
                <option value="{{$domaine->id}}">{{$domaine->libelleDomaine}}</option>
                @endforeach
              </select>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Source de financement</label>
              <select name="source_financement_id" id="source_financement_id" class="form-control">
                @foreach ($sources as $source)
                <option value="{{$source->id}}">{{$source->libelleSourceFinancement}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
         
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Années</label>
              <input type="text"   name="annees" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'années d'installation est obligatoire</span></small>
            </div>
          </div>
          
          <div class="col-6">
            <div class="form-group">
              <label for="">Lieux d'installation</label>
              <input type="date"   name="lieuInstallation" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">selectionner le lieux d'installation  est obligatoire</span></small>
            </div>
          </div>
        </div>
   
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Kit?</label>
              <input type="checkbox"   name="confirmedKits" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
          </div>
        </div>
         
      </div>
      <div class="modal-footer">
        <a href="{{url('/installation')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  
  
</div>
</div>



@endsection