@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <h3>
         <div align=center>Activité des organes</div>
       </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>   
                  </div>
                </div>
             </div>
        </div>
    <div class="row" style="margin-top: 5%">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table id="typeenvoyeurTable" class="table table-bordered table-striped">
                  <thead style="background-color: #007bff;color:white;">
                    <tr>
                      <th>Activités </th>
                      <th>Filières </th>
                      <th>Maillons </th>
                      
                      <th>Actions</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($activiteorganes as $activiteorgane)
                  <tr>
                    <td>{{$activiteorgane->activitePrincipale}}</td>
                    <td>{{$activiteorgane->maillon->Libelle}}</td>
                    <td>{{$activiteorgane->filiere->LibelleFiliere}}</td>

                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$activiteorgane->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#supprimer'.$activiteorgane->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                             <div class="modal fade" id="{{'modifier'.$activiteorgane->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            
                            <form action="{{url('/update-activiteorgane/'.$activiteorgane->id)}}" method="POST">
                            @csrf
                                <div class="modal-content">
                                  <div class="modal-header coopvert">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier une activité</h5>
                                    
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-6">
                                        <input hidden name="id"  value="{{$activiteorgane->id}}" type="text">
                                      </div>
                                      
                                    </div>

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="">Filières</label>
                                                  <select name="filiere_id" class="form-control" id="">
                                                      @foreach ($filieres as $filiere)
                                                      <option value="{{$filiere->id}}">{{$filiere->LibelleFiliere}}</option>
                                                      @endforeach
                                                  </select>
                                                  <small id="helpId" class="text-muted"><span style="color: red">Libellé est obligatoire</span></small>
                                              </div>
                                            </div>
                                            <div class="col-6">

                                              <div class="form-group">
                                                  <label for="">Activités</label>
                                                  <input type="text"  value="{{$activiteorgane->activitePrincipale}}" name="activitePrincipale" id="" class="form-control" placeholder="Saisiez le libelle du maillon" aria-describedby="helpId" required>
                                                  <small id="helpId" class="text-muted" ><span style="color: red">le libelle est obligatoire</span></small>

                                              </div>

                                            </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-6">
                                                  <div class="form-group">
                                                      <label for="">Maillons</label>
                                                      <select name="maillon_id" class="form-control" id="">
                                                          @foreach ($maillons as $maillon)
                                                          <option value="{{$maillon->id}}">{{$maillon->Libelle}}</option>
                                                          @endforeach
                                                      </select>
                                                      <small id="helpId" class="text-muted"><span style="color: red">Libellé est obligatoire</span></small>
                                                  </div>
                                              </div>
                                            </div>


                                        </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
                                      <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                                    </div>
                                  </div>
                                </div>
                            </form>
                          </div>
                        </div>

                        <div class="modal fade" id="{{'supprimer'.$activiteorgane->id}}">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header coopvert">
                                  <h4 class="modal-title">Supprimer une activité</h4>
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
                                              <a href="{{url('/delete-activiteorgane/'.$activiteorgane->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
    <form action="{{url('/save-activiteorgane')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header coopvert">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une activité</h5>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">

            <div class="form-group">
              <label for="">Activité</label>
              <input type="text"   name="activitePrincipale" id="" class="form-control" placeholder="Saisiez le nom de l'activité" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle est obligatoire</span></small>

            </div>
          </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Filières</label>
                    <select name="filiere_id" class="form-control" id="">
                        @foreach ($filieres as $filiere)
                        <option value="{{$filiere->id}}">{{$filiere->LibelleFiliere}}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="text-muted"><span style="color: red">Libellé est obligatoire</span></small>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Maillons</label>
                    <select name="maillon_id" class="form-control" id="">
                        @foreach ($maillons as $maillon)
                        <option value="{{$maillon->id}}">{{$maillon->Libelle}}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="text-muted"><span style="color: red">Libellé est obligatoire</span></small>
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
