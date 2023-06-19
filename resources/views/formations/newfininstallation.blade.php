@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/save-fin-formation')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une fin de formation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Inscription</label>
              <select  class="form-control" name="inscription" id="fin_formation">
                
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
              <label for="">Années fin de formation</label>
              <input type="text"   name="anneesFinFormation" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l année de fin est obligatoire</span></small>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">motif de non fin de formation</label>
              <input type="text"   name="motif" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">Motif  de fin est obligatoire</span></small>
            </div>
          </div>
        </div>
   
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">sortie?</label>
              <input type="checkbox"   name="confirmedSortie" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Date Inscription</label>
              <input type="date"   name="dateFinFormation" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">selectionner la date inscription est obligatoire</span></small>
            </div>
          </div>
        </div>
         
      </div>
      <div class="modal-footer">
        <a href="{{url('/fin-formation')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  
  
</div>
</div>



@endsection