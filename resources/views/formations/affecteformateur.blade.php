@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                <a class="btn btn-warning" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i></a>
               </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 5%">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table id="typeenvoyeurTable" class="table table-bordered table-striped">
                <thead style="background-color: #007bff;color:white;">
                <tr>
                  <th>Structure de formation </th>
                  <th>Formateur </th>
                  <th>Date d'affectation </th>
                  <th>Status du formateur</th>
                  <th>Cycle de formation</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($affectes as $affecte)
                  <tr>
                    <td>{{$affecte->centreformation->denomination}}</td>
                    <td>Nom:{{$affecte->formateur->nomComplet}} Contact{{$affecte->formateur->contact}}</td>
                    <td>{{$affecte->dateAffectation}}</td>
                    <td>{{$affecte->regimeFormateur}}</td>
              
  
                    <td>{{$affecte->typeformation}}</td>
                     
          
                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$affecte->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$affecte->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                        <div class="modal fade" id="{{'modifier'.$affecte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-affectation-formateur/'.$affecte->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header modal-header-designed">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier une affectation de formateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-6">
                                    <input hidden name="id"  value="{{$affecte->id}}" type="text">
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Date d affectation</label>
                                        <input type="date"  value="{{$affecte->dateAffectation}}" name="dateAffectation" id="" class="form-control" placeholder="la date d'affectation" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">la date d affectation est obligatoire</span></small>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Statut de Formateur</label>
                                        <input type="text"  value="{{$affecte->regimeFormateur}}" name="regimeFormateur" id="" class="form-control" placeholder="le regime" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">la date d affectation est obligatoire</span></small>
                                      </div>
                                    </div>
                                 
                                    
                                  </div>
                                
                               

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Formateur</label>
                                        <select name="formateur_id" class="form-control" id="">
                                            @foreach ($formateurs as $formateur)
                                                <option @if ($affecte->formateur->id==$formateur->id)
                                                    selected
                                                @endif value="{{$formateur->id}}">{{$formateur->nomComplet}} {{$formateur->contact}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le formateur de la  formation est obligatoire</span></small>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Structure de formation</label>
                                        <select name="centre_id" class="form-control" id="">
                                            @foreach ($centres as $centre)
                                                <option @if ($centre->id==$affecte->centreformation->id)
                                                    selected
                                                @endif value="{{$centre->id}}">{{$centre->denomination}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le centre de formation est obligatoire</span></small>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Cycle formation</label>
                                        <select multiple="multiple" name="types[]" class="form-control" id="type">
                                        @foreach ($types as $type)
                                          @foreach ($affecte->typeformation as $item)
                                          <option @if ($item->id==$type->id)
                                              selected
                                          @endif  value="{{$type->id}}">{{$type->libelleTypeFormation}}</option>
                                          @endforeach
                                          <option  value="{{$type->id}}">{{$type->libelleTypeFormation}}</option>
                                        @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le type de la  formation est obligatoire</span></small>
                                      </div>
                                    </div>
                                  </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
                                <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                              </div>
                            </div>
                          </form>
                          </div>
                        </div>
                      

    <div class="modal fade" id="{{'suprimer'.$affecte->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer une formation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="row">
                 <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="row">
                       <div class="col-lg-12 col-md-12 col-sms-12">
                         <span style="color: red;font-weight:bold;font-size:0.5cm">Voulez vous effectuer cette action <i class="fa fa-exclamation-triangle fa-3x" style="color: red;"></i></span>
                       </div>
                     </div>
                      <div class="row">
                        <div class="col-lg-12 col-sm-12  col-md-12">
                          <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                          <a href="{{url('/delete-affectation-formateur/'.$affecte->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
                        </div>
                      </div>
                   </div>
                 </div>
             </div>
            </div>
          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

                      
                        </td>
                    </tr>
                  @endforeach
              
               
              </table>

              {{ $affectes->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/save-affectation-formateur')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une affectation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Date d affectation</label>
                <input type="date"  name="dateAffectation" id="" class="form-control" placeholder="date d'affectation" aria-describedby="helpId">
                <small id="helpId" class="text-muted" ><span style="color: red">la date d affectation est obligatoire</span></small>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Statut du Formateur</label>
                <input type="text"  name="regimeFormateur" id="" class="form-control" placeholder="le regime" aria-describedby="helpId">
                <small id="helpId" class="text-muted" ><span style="color: red">le regime du formateur est obligatoire</span></small>
              </div>
            </div>
          
            
            
          </div>
        
       

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Formateur</label>
                <select name="formateur_id" class="form-control" id="">
                    @foreach ($formateurs as $formateur)
                        <option value="{{$formateur->id}}">{{$formateur->nomComplet}} {{$formateur->contact}}</option>
                    @endforeach
                </select>
                <small id="helpId" class="text-muted" ><span style="color: red">le formateur de la  formation est obligatoire</span></small>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Structure de formation</label>
                <select name="centre_id" class="form-control" id="">
                    @foreach ($centres as $centre)
                        <option  value="{{$centre->id}}">{{$centre->denomination}}</option>
                    @endforeach
                </select>
                <small id="helpId" class="text-muted" ><span style="color: red">le centre de formation est obligatoire</span></small>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Cycle de formation</label>
              <select name="types[]" id="types" multiple="multiple" data-placeholder="selectionner les cycles" style="width: 100%;">
                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->libelleTypeFormation}}</option>
                @endforeach
              </select>
              <small id="helpId" class="text-muted" ><span style="color: red">le cycle de la  formation est obligatoire</span></small>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  </div>
</div>

@endsection