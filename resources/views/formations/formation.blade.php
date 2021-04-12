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
                  <th>Formation </th>
                  <th>Themes </th>
                  <th>Type formation </th>
                  <th>Coût de la formation </th>
                  <th>Source de financement </th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($formations as $formation)
                  <tr>
                    <td>{{$formation->libelleFormations}}</td>
                    <td>{{$formation->themes}}</td>
                    <td>{{$formation->typeformation->libelleTypeFormation}}</td>
                    <td>{{$formation->coutFormation}}</td>
                    <td>{{$formation->sourcefinancement->libelleSourceFinancement}}</td> 
                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$formation->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$formation->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                        <div class="modal fade" id="{{'modifier'.$formation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-formations/'.$formation->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header modal-header-designed">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier une formation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-6">
                                    <input hidden name="id"  value="{{$formation->id}}" type="text">
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Libelle de la formation</label>
                                        <input type="text"  value="{{$formation->libelleFormations}}" name="libelleFormations" id="" class="form-control" placeholder="la region" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">le libelle de la formation est obligatoire</span></small>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                        <label for="">Themes</label>
                                        <input type="text"  value="{{$formation->themes}}" name="themes" id="" class="form-control" placeholder="le theme de la formation" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">le theme est obligatoire</span></small>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Coût de la formation</label>
                                        <input type="text"  value="{{$formation->coutFormation}}" name="coutFormation" id="" class="form-control" placeholder="la region" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">le coût de la  formation est obligatoire</span></small>
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Source de financement</label>
                                        <select name="source_id" class="form-control" id="">
                                            @foreach ($sources as $source)
                                                <option value="{{$source->id}}">{{$source->libelleSourceFinancement}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le coût de la  formation est obligatoire</span></small>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">type formation</label>
                                        <select name="type_id" class="form-control" id="">
                                            @foreach ($types as $type)
                                                <option value="{{$type->id}}">{{$type->libelleTypeFormation}}</option>
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
                      

    <div class="modal fade" id="{{'suprimer'.$formation->id}}">
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
                          <a href="{{url('/delete-formations/'.$formation->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/save-formations')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un formateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Libelle de la formation</label>
              <input type="text"   name="libelleFormations" id="" class="form-control" placeholder="libelle de la formation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle de la formation est obligatoire</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Themes</label>
              <input type="text"   name="themes" id="" class="form-control" placeholder="le theme de la formation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le theme est obligatoire</span></small>
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Coût de la formation</label>
              <input type="text"  name="coutFormation" id="" class="form-control" placeholder="cout de la formation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le coût de la  formation est obligatoire</span></small>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Source de financement</label>
              <select name="source_id" class="form-control" id="">
                  @foreach ($sources as $source)
                      <option value="{{$source->id}}">{{$source->libelleSourceFinancement}}</option>
                  @endforeach
              </select>
              <small id="helpId" class="text-muted" ><span style="color: red">le coût de la  formation est obligatoire</span></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">type formation</label>
              <select name="type_id" class="form-control" id="">
                  @foreach ($types as $type)
                      <option value="{{$type->id}}">{{$type->libelleTypeFormation}}</option>
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

@endsection