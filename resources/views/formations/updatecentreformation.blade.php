@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-update-centre-formation/'.$centre->id)}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un centre de formation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Denomination</label>
              <input type="text" value="{{$centre->denomination}}"   name="denomination" id="" class="form-control" placeholder="Denomination" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la denomination ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Contact</label>
              <input type="text" value="{{$centre->localisation}}"   name="localisation" id="" class="form-control" placeholder="la localisation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la localisation ne doit pas être vide</span></small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">le status</label>
              <input type="text" value="{{$centre->statut}}"   name="statut" id="" class="form-control" placeholder="le statut" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le statut ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la capacité d'accueil</label>
              <input type="text" value="{{$centre->capacite}}"   name="capacite" id="" class="form-control" placeholder="la capacité d'accueil" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le statut ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">l'addresse</label>
              <input type="text" value="{{$centre->adresse}}"   name="adresse" id="" class="form-control" placeholder="l'addresse" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'addresse ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la ref. d'ouverture</label>
              <input type="text" value="{{$centre->referenceOuverture}}"   name="referenceouverture" id="" class="form-control" placeholder="la ref. d'ouverture" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la ref. d'ouverture ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">la date d'ouverture</label>
              <input type="date" value="{{$centre->dateOuverture}}"   name="dateOuverture" id="" class="form-control" placeholder="la date d'ouverture" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la date d'ouverture ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="communes">Commune</label>
              <select id="communes" class="form-control" name="commune_id">
                @foreach ($communes as $commune)
                <option @if ($centre->commune->id==$commune->id)
                  selected
              @endif value="{{$commune->id}}">{{$commune->libelleCommune}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="promoteurs">Promoteur</label>
              <select id="promoteur" class="form-control" name="promoteur_id">
                @foreach ($promoteurs as $promoteur)
                <option @if ($centre->promoteur->id==$promoteur->id)
                  selected
              @endif value="{{$promoteur->id}}">Promoteur: {{$promoteur->promoteur}} Contact:{{$promoteur->contact}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="gestionnaires">Gestionnaire</label>
              <select id="gestionnaires" class="form-control" name="gestionnaire_id">
                @foreach ($gestionnaires as $gestionnaire)
                <option @if ($centre->gestionnaire->id==$gestionnaire->id)
                    selected
                @endif value="{{$gestionnaire->id}}">Nom:{{$gestionnaire->nomComplet}} Contact:{{$gestionnaire->contact}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Approche pedagogique</label>
              <select id="approche" name="approches[]" multiple="multiple" data-placeholder="selectionner les approches pedagogiques" style="width: 100%;">
               
                @foreach ($approches as $approche)
                @foreach ($centre->approchepedagogique as $item)
                  @if ($item->id==$approche->id)
                  <option selected value="{{$item->id}}">{{$item->approchePedagogique}}</option> 
                
                  @endif
                @endforeach
                <option  value="{{$approche->id}}">{{$approche->approchePedagogique}}</option> 
                @endforeach
               
              </select>
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="publiccible">Publique cible</label>
              <select id="publiccible" data-placeholder="selectionner les publiques cibles" class="form-control" multiple='multiple' name="publiccible[]">
                @foreach ($publics as $public)
                  @foreach ($centre->publiccible as $item)
                  <option @if ($item->id==$public->id)
                      selected
                  @endif value="{{$public->id}}">Nom:{{$public->libellePublicCible}}</option>
                  @endforeach
                  <option value="{{$public->id}}">Nom:{{$public->libellePublicCible}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Spécialités</label>
              <select id="specialite" name="specialites[]" multiple="multiple" data-placeholder="selectionner les specialités" style="width: 100%;">
               
                @foreach ($specialites as $specialite)
                  @foreach ($centre->specialite as $item)
                  <option @if ($item->id==$specialite->id)
                      selected
                  @endif  value="{{$specialite->id}}">{{$specialite->libelleSpecialite}}</option>
                  @endforeach
                  <option  value="{{$specialite->id}}">{{$specialite->libelleSpecialite}}</option>
                @endforeach
                
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="domaines">Domaine de formations</label>
              <select id="domaines" data-placeholder="selectionner les domaines de formations" class="form-control" multiple='multiple' name="domaines[]">
                @foreach ($domaines as $domaine)
                @foreach ($centre->domainesformation as $item)
                <option @if ($item->id==$domaine->id)
                    selected
                @endif value="{{$domaine->id}}">{{$domaine->libelleDomaineFormation}}</option>
                @endforeach
                <option  value="{{$domaine->id}}">{{$domaine->libelleDomaineFormation}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contributions</label>
              <select id="contribution" name="contributions[]" multiple="multiple" data-placeholder="selectionner les contribution" style="width: 100%;">
               
                @foreach ($contributions as $contribution)
                  @foreach ($centre->contribution as $item)
                  <option @if ($item->id==$contribution->id)
                      selected
                  @endif value="{{$contribution->id}}">{{$contribution->libelleContribution}}</option>
                  @endforeach
                  <option value="{{$contribution->id}}">{{$contribution->libelleContribution}}</option>
                @endforeach
                
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="domaines">Niveau de recrutement</label>
              <select id="niveaus" data-placeholder="selectionner les niveau de recrutement" class="form-control" multiple='multiple' name="niveaus[]">
                @foreach ($niveaus as $niveau)
                  @foreach ($centre->niveaurecrutement as $item)
                  <option @if ($item->id==$niveau->id)
                      selected
                  @endif value="{{$niveau->id}}">{{$niveau->libelleNiveauRecrutement}}</option>
                  @endforeach
                  <option value="{{$niveau->id}}">{{$niveau->libelleNiveauRecrutement}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Regime</label>
              <select id="regime" name="regime"  data-placeholder="selectionner un regime" style="width: 100%;">
               
                @foreach ($regimes as $regime)
                <option @if ($centre->regime_id==$regime->id)
                    selected
                @endif value="{{$regime->id}}">{{$regime->libelleRegime}}</option>
                @endforeach
                
              </select>
            </div>
          </div>
         
        </div>


      </div>
      <div class="modal-footer">
        <a href="{{url('/centre-formation')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  
  
</div>
</div>



@endsection