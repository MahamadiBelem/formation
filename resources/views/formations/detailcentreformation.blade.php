@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">details du centre de formation: {{$centre->denomination}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for=""><strong>Denomination</strong></label>
              <span>: {{$centre->denomination}}</span>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">localisation</label>
              <span>: {{$centre->localisation}}</span>
              
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">le status</label>
              <span>: {{$centre->statut}}</span>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la capacité d'accueil</label>
              <span>: {{$centre->capacite}}</span>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">l'addresse</label>
              <span>: {{$centre->adresse}}</span>
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">la ref. d'ouverture</label>
              <span>: {{$centre->referenceOuverture}}</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">la date d'ouverture</label>
              <span>: {{$centre->dateOuverture}}</span>
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="communes">Commune</label>
               
                <span>:{{$centre->commune->libelleCommune}}</span>
               
              
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="promoteurs">Promoteur:</label>
             
               <br>
                <span>Nom du promoteur: {{$centre->promoteur->nomComplet}} <br> Contact promoteur:{{$centre->promoteur->contact}}</span>
              
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="gestionnaires">Gestionnaire:</label>
             <br>
                  Nom du gestionnaire: <span>{{$centre->gestionnaire->nomComplet}} <br>
                  Contact du gestionnaire {{$centre->gestionnaire->contact}} <br>
                  emploi du gestionnaire {{$centre->gestionnaire->emploi}}
                  </span>
             
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Approche pedagogique:</label>
             
              @foreach ($centre->approchepedagogique as $approche)
                  <span>{{$approche->approchePedagogique}} ,</span>
              @endforeach
              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="publiccible">Publique cible:</label>
              @foreach ($centre->publiccible as $public)
                  <span>{{$public->libellePublicCible}} ,</span>
              @endforeach
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Spécialités:</label>
              @foreach ($centre->specialite as $specialite)
                  <span>{{$specialite->libelleSpecialite}}, <br></span>
              @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="domaines">Domaine de formations:</label>
              @foreach ($centre->domainesformation as $domaine)
                  <span>{{$domaine->libelleDomaineFormation}} ,</span>
              @endforeach
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contributions:</label>
              @foreach ($centre->contribution as $contribution)
                  <span>{{$contribution->libelleContribution}},</span>
              @endforeach
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="domaines">Niveau de recrutement:</label>
              @foreach ($centre->niveaurecrutement as $niveau)
                  <span>{{$niveau->libelleNiveauRecrutement}} ,</span>
              @endforeach
              
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Regime:</label>
                <span>{{$centre->regime->libelleRegime}} <br></span>
            </div>
          </div>
         
        </div>

        <div class="row">
          <div class="col-6">
            <a href="{{url('/centre-formation')}}" class="btn btn-primary"><i  class="fa fa-arrow-left"></i></a>
          </div>
         
        </div>

      </div>
  
    </div>
 
</div>
</div>



@endsection