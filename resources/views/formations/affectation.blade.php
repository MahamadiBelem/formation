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
                  <th>Apprenants</th>
                  <th>Type de Kits </th>
                  <th>Sources Financements </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($affectes as $affecte)
                  <tr>
                    <td>{{$affecte->apprenant->matricule}}</td>
                    <td>Nom:{{$affecte->kit->libelleKits}} Qte:{{$affecte->kit->quantites}}</td>
                    <td>{{$affecte->sourcefinancement->libelleSourceFinancement}}</td>
                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$affecte->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$affecte->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                        <div class="modal fade" id="{{'modifier'.$affecte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-affectation-kit/'.$affecte->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header modal-header-designed">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier une affectation </h5>
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
                                        <label for="">Apprenant</label>
                                        <select name="apprenant_id" class="form-control" id="">
                                            @foreach ($apprenants as $apprenant)
                                                <option @if ($affecte->apprenant->id==$apprenant->id)
                                                    selected
                                                @endif value="{{$apprenant->id}}">{{$apprenant->matricule}} {{$apprenant->nom}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le formateur de la  formation est obligatoire</span></small>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Type de Kit</label>
                                        <select name="kit_id" class="form-control" id="">
                                            @foreach ($kits as $kit)
                                                <option @if ($kit->id==$affecte->kit->id)
                                                    selected
                                                @endif value="{{$kit->id}}">{{$kit->libelleKits}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le centre de formation est obligatoire</span></small>
                                      </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Source financement</label>
                                        <select name="source_financement_id" class="form-control" id="">
                                            @foreach ($sourcefinancements as $sourcefinancement)
                                                <option @if ($affecte->sourcefinancement->id==$sourcefinancement->id)
                                                    selected
                                                @endif value="{{$sourcefinancement->id}}">{{$sourcefinancement->libelleSourceFinancement}}</option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted" ><span style="color: red">la source est obligatoire</span></small>
                                      </div>
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
              <h4 class="modal-title">Supprimer affectation de kits</h4>
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
                          <a href="{{url('/delete-affectation-kit/'.$affecte->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
    <form action="{{url('/save-affectation-kit')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une affectation de kits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Apprenant *</label>
                <select name="apprenant_id" class="form-control" id="">
                    @foreach ($apprenants as $apprenant)
                        <option value="{{$apprenant->id}}">{{$apprenant->nom}} {{$apprenant->matricule}}</option>
                    @endforeach
                </select>
                <small id="helpId" class="text-muted" ><span style="color: red">l'apprenant est obligatoire</span></small>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Type de kit formation *</label>
                <select name="kit_id" class="form-control" id="">
                    @foreach ($kits as $kit)
                        <option  value="{{$kit->id}}">{{$kit->libelleKits}}</option>
                    @endforeach
                </select>
                <small id="helpId" class="text-muted" ><span style="color: red">le kit est obligatoire</span></small>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Source Financement *</label>
                <select name="source_financement_id" class="form-control" id="">
                    @foreach ($sourcefinancements as $sourcefinancement)
                        <option  value="{{$sourcefinancement->id}}">{{$sourcefinancement->libelleSourceFinancement}}</option>
                    @endforeach
                </select>
                <small id="helpId" class="text-muted" ><span style="color: red">la source est obligatoire</span></small>
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