@extends('layout.templateformation')

@section('content')
<!--THIS FILE IS FOR DISPLAY FORM ADD PROJET  --> 
<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-domaine-installation')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un  projet d'installation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Libelle projet d installation</label>
              <input type="text"   name="libelleDomaine" id="" class="form-control" placeholder="le libelle d installation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle du domaine est obligatoire</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Kits associés</label>
              <select multiple='multiple' class="form-control" name="kits[]" id="kits" required>
                
                @foreach ($kits as $kit)
                <option value="{{$kit->id}}">Kit:{{$kit->libelleKits}} Qte:{{$kit->quantites}}  </option>
                @endforeach
                
              </select>
            </div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">structure de formation </label>
              <select type="text"   name="libelleStructure" id="" class="form-control" placeholder="le libelle structure" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle structure est obligatoire</span></small>
              </select>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Apprenant</label>
              <select multiple='multiple' class="form-control" name="kits[]" id="kits">
                
                @foreach ($kits as $kit)
                <option value="{{$kit->id}}">Kit:{{$kit->libelleKits}} Qte:{{$kit->quantites}}  </option>
                @endforeach
                
              </select>
            </div>
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