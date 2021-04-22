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
                  <th>Emploi </th>
                  <th>Contact </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($formateurs as $formateur)
                  <tr>
                    <td>{{$formateur->nomComplet}}</td>
                    <td>{{$formateur->emploi}}</td>
                    <td>{{$formateur->contact}}</td> 
                    
                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$formateur->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$formateur->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                        <div class="modal fade" id="{{'modifier'.$formateur->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-formateur/'.$formateur->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header modal-header-designed">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier formateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-6">
                                    <input hidden name="id"  value="{{$formateur->id}}" type="text">
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Nom & prenom</label>
                                        <input type="text"  value="{{$formateur->nomComplet}}" name="nomComplet" id="" class="form-control" placeholder="Saisiez le nom du formateur" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le nom du formateur est obligatoire</span></small>
                                      </div>
                                    </div>

                                    <div class="col-6">
                                      <div class="form-group">
                                        <label for="">Emploi</label>
                                        <input type="text"  value="{{$formateur->emploi}}" name="emploi" id="" class="form-control" placeholder="la region" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">l'emploi est obligatoire</span></small>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="">Contact</label>
                                        <input type="text"  value="{{$formateur->contact}}" name="contact" id="" class="form-control" placeholder="la region" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted" ><span style="color: red">le contact du formateur est obligatoire</span></small>
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
                      

    <div class="modal fade" id="{{'suprimer'.$formateur->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer un formateur</h4>
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
                          <a href="{{url('/delete-formateur/'.$formateur->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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

              {{ $formateurs->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/save-formateur')}}" method="POST">
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
              <label for="">Nom & prenom</label>
              <input type="text"   name="nomComplet" id="" class="form-control" placeholder="Saisiez le nom & prenom" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le nom du formateur est obligatoire</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Emploi</label>
              <input type="text"  name="emploi" id="" class="form-control" placeholder="emploi" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">l'emploi est obligatoire</span></small>
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Contact</label>
              <input type="text"   name="contact" id="" class="form-control" placeholder="contact" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le contact du formateur est obligatoire</span></small>
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