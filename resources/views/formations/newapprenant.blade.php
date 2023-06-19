@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-apprenant')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un apprenant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Matricule</label>
              <input readonly value="{{$matricule}}" type="text"   name="matricule" id="" class="form-control" placeholder="Num. matricule" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le numèro matricule ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text"   name="nom" id="" class="form-control" placeholder="Saisiez le Nom" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le nom ne doit pas être vide</span></small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Prenom</label>
              <input type="text"   name="prenom" id="" class="form-control" placeholder="Saisiez le prenom" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le prenom ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Date naissance</label>
              <input type="date"   name="dateNaissance" id="" class="form-control" placeholder="La date de naissance" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">la date de naissance ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Contact</label>
              <input type="text"   name="contact" id="" class="form-control" placeholder="le contact" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le contact ne doit pas être vide</span></small>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Nombre d'enfant</label>
              <input type="text"   name="nombreEnfant" id="" class="form-control" placeholder="le nombre d'enfant" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le nombre d'enfant ne doit pas être vide</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">la date d'ouverture</label>
              <select name="sexe" id=""  class="form-control">
                <option value="MASCULIN">MASCULIN</option>
                <option value="FEMININ">FEMININ</option>
              </select>
              <small id="helpId" class="text-muted" ><span style="color: red">le sexe ne doit pas être vide</span></small>
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
              <label for="niveau">Niveau d'instruction</label>
              <select id="niveau_instruction" class="form-control" name="niveau_instruction_id">
                @foreach ($niveaus as $niveau)
                <option value="{{$niveau->id}}"> {{$niveau->libelleNiveauInstruction}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="situation_matrimoniale">situation Matrimoniale</label>
              <select id="situation_matrimoniale" class="form-control" name="situation_id">
                <option value="Marié">Marié</option>
                <option value="Celibataire">Celibataire</option>
                <option value="Divorcé">Divorcé</option>
                <option value="Autres">Autres</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Localite</label>
              <input type="text"   name="localites" id="" class="form-control" placeholder="Saisiez la localite" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">la localite ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Contact Personne Cas besoin</label>
              <input type="text"   name="localites" id="" class="form-control" placeholder="Saisiez le nom" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">la localite ne doit pas être vide</span></small>
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