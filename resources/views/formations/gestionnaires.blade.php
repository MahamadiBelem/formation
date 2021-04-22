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
                  <th>Nom & prenom </th>
                  <th>Contact </th>
                  <th>Emploi </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($gestionnaires as $gestionnaire)
                  <tr>
                    <td>{{$gestionnaire->nomComplet}}</td>
                    <td>{{$gestionnaire->contact}}</td>
                    <td>{{$gestionnaire->emploi}}</td> 
                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$gestionnaire->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$gestionnaire->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                        <div class="modal fade" id="{{'modifier'.$gestionnaire->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-gestionnaires/'.$gestionnaire->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header modal-header-designed">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier un gestionnaire</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-6">
                                    <input hidden name="id"  value="{{$gestionnaire->id}}" type="text">
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Gestionnaire</label>
                                        <input type="text"  value="{{$gestionnaire->nomComplet}}" name="nomComplet" id="" class="form-control" placeholder="le nom complet du gestionnaire" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le nom du gestionnaire ne doit pas être vide</span></small>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                        <label for="">Contact</label>
                                        <input type="text"  value="{{$gestionnaire->contact}}" name="contact" id="" class="form-control" placeholder="Saisiez le contact du gestionnaire" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">le contact du gestionnaire ne doit pas être vide</span></small>
                                      </div>
                                    </div>
                                  </div>
                                

                                  <div class="row">
                                    <div class="col-6">
                                      <div class="form-group">
                                        <label for="">Emploi</label>
                                        <input type="text"  value="{{$gestionnaire->emploi}}" name="emploi" id="" class="form-control" placeholder="Saisiez l'emploi du gestionnaire" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">l'emploi du gestionnaire ne doit pas être vide</span></small>
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
                      

    <div class="modal fade" id="{{'suprimer'.$gestionnaire->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer un gestionnaire</h4>
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
                          <a href="{{url('/delete-gestionnaires/'.$gestionnaire->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
              {{ $gestionnaires->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/save-gestionnaires')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un gestionnaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Gestionnaire</label>
              <input type="text"   name="nomComplet" id="" class="form-control" placeholder="Saisiez le nom complet du gestionnaire" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le nom du gestionnaire ne doit pas être vide</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Contact</label>
              <input type="text"   name="contact" id="" class="form-control" placeholder="Saisiez le contact du gestionnaire" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le contact du gestionnaire ne doit pas être vide</span></small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Emploi</label>
              <input type="text"   name="emploi" id="" class="form-control" placeholder="Saisiez l'emploi du gestionnaire" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'emploi du gestionnaire ne doit pas être vide</span></small>
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