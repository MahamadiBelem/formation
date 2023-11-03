@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-centre-formation')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">ajouter une structure de formation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Denomination</label>
              <input type="text"   name="denomination" id="" class="form-control" placeholder="Denomination" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la denomination ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Contact</label>
              <input type="text"   name="localisation" id="" class="form-control" placeholder="la localisation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la localisation ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Status de la structure</label>
              <input type="text"   name="statut" id="" class="form-control" placeholder="le statut" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le statut ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la capacité d'accueil</label>
              <input type="text"   name="capacite" id="" class="form-control" placeholder="la capacité d'accueil" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le statut ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">l'addresse</label>
              <input type="text"   name="adresse" id="" class="form-control" placeholder="l'addresse" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'addresse ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la ref. d'ouverture</label>
              <input type="text"   name="referenceOuverture" id="" class="form-control" placeholder="la ref. d'ouverture" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la ref. d'ouverture ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">la date d'ouverture</label>
              <input type="date"   name="dateOuverture" id="" class="form-control" placeholder="la date d'ouverture" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">la date d'ouverture ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="communes">Commune</label>
              <select id="communes" class="form-control" name="commune_id">
                @foreach ($communes as $commune)
                <option value="{{$commune->id}}">{{$commune->libelleCommune}}</option>
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
                <option value="{{$approche->id}}">{{$approche->approchePedagogique}}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="publiccible">Publique cible</label>
              <select id="publiccible" data-placeholder="selectionner les publiques cibles" class="form-control" multiple='multiple' name="publiccible[]">
                @foreach ($publics as $public)
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
                <option value="{{$specialite->id}}">{{$specialite->libelleSpecialite}}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="domaines">Domaine de formations</label>
              <select id="domaines" data-placeholder="selectionner les domaines de formations" class="form-control" multiple='multiple' name="domaines[]">
                @foreach ($domaines as $domaine)
                <option value="{{$domaine->id}}">{{$domaine->libelleDomaineFormation}}</option>
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
              <select id="regime" multiple='multiple' class="form-control" name="regimes[]"  data-placeholder="selectionner un regime" style="width: 100%;">

                @foreach ($regimes as $regime)
                <option value="{{$regime->id}}">{{$regime->libelleRegime}}</option>
                @endforeach

              </select>
            </div>
          </div>
         <!-- TYPE STRUCTURE IS A NEW FIELD ADDED-->
          <div class="col-6">
            <div class="form-group">
              <label for="">Type Structure</label>
              <input type="text"   name="typeStructure" id="" class="form-control" placeholder="le Type de structure" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le statut ne doit pas être vide</span></small>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Promoteur</label>
              <input type="text"   name="promoteur" id="" class="form-control" placeholder="le Type de structure" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le Promoteur ne doit pas être vide</span></small>
            </div>
          </div>

         <!-- TYPE STRUCTURE IS A NEW FIELD ADDED-->
          <div class="col-6">
            <div class="form-group">
              <label for="">Gestionnaire</label>
              <input type="text"   name="gestionnaire" id="" class="form-control" placeholder="le Type de structure" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le Gestionnair ne doit pas être vide</span></small>
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
