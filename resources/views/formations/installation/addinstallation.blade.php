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
        
        <!--div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Annees</label>
              <input  type="text"   name="annees" id="" class="form-control" placeholder="années d'inscription" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l annees inscription ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Date d'incription </label>
              <input type="date"   name="dateInscription" id="" class="form-control" placeholder="Date d'inscription" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la date inscription ne doit pas être vide</span></small>
            </div>
          </div>
        </div-->
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Aprrenant</label>
              <select  class="form-control" name="inscription" id="installation_affecte">
                
                @foreach ($affectes as $affecte)
                <option value="{{$affecte->id}}">Matricule:{{$affecte->apprenant->matricule}} Nom:{{$affecte->apprenant->nom}}  Prenom:{{$affecte->apprenant->prenom}}  Cycle Formation:{{$affecte->typeformation->libelleTypeFormation}} </option>
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
              <label for="">Projet d'installation</label>
              <select name="domaine_installation" id="domaine_installation" class="form-control">
                @foreach ($domaines as $domaine)
                <option value="{{$domaine->id}}">{{$domaine->libelleDomaine}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Structure de formation </label>
              <select name="centre_formation_id" id="centre_formation_id" class="form-control">
                @foreach ($centres as $centre)
                <option value="{{$centre->id}}">{{$centre->denomination}}</option>
                @endforeach
              </select>
            </div>
          </div>
        
        </div>

        <div class="row">
         
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Année de sortie</label>
              <input type="text"   name="annees" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'années d'installation est obligatoire</span></small>
            </div>
          </div>
          
          <div class="col-6">
            <div class="form-group">
              <label for="">Lieux d'installation</label>
              <input type="text"   name="lieuInstallation" id="" class="form-control" placeholder="" aria-describedby="helpId">
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

          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Regions</label>
              <select name="region_id" id="region_id" class="form-control">
                @foreach ($regions as $region)
                <option value="{{$region->id}}">{{$region->libelleRegion}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
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
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Provinces</label>
              <select name="province_id" id="province_id" class="form-control">
                @foreach ($provinces as $province)
                <option value="{{$province->id}}">{{$province->libelleProvince}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
              <label for="">Communes</label>
              <select name="commune_id" id="commune_id" class="form-control">
                @foreach ($communes as $commune)
                <option value="{{$commune->id}}">{{$commune->libelleCommune}}</option>
                @endforeach
              </select>
            </div>
        </div>
         
         <div class="col-6">
           <div class="form-group">
             <label for="">Villages</label>
             <select name="village_id" id="village_id" class="form-control">
                @foreach ($villages as $village)
                <option value="{{$village->id}}">{{$village->libelleVillages}}</option>
                @endforeach
              </select>
             <small id="helpId" class="text-muted" ><span style="color: red">selectionner le lieux d'installation  est obligatoire</span></small>
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