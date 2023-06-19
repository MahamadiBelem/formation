@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
        <h3>
            <div align=center>Maillons</div>
        </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
<!-- 
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
-->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<!--  
                            <a class="dropdown-item" href="maexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="maexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
-->
                          </div>

                    </div>
                </div>
            </div>
        </div>
    <div class="row" style="margin-top: 5%">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table id="typeenvoyeurTable" class="table table-bordered table-striped">
                <thead style="background-color: #007bff;color:white;">
                <tr>
                  <th>Maillon </th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($maillons as $maillon)
                  <tr>
                    <td>{{$maillon->Libelle}}</td>

                    <td>
                          <button  data-toggle="modal" data-target="{{'#modifier'.$maillon->id}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$maillon->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                        <div class="modal fade" id="{{'modifier'.$maillon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{url('/update-maillon/'.$maillon->id)}}" method="POST">
                              @csrf
                            <div class="modal-content">
                              <div class="modal-header coopvert">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier un maillon</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-6">
                                    <input hidden name="id"  value="{{$maillon->id}}" type="text">
                                  </div>
                                </div>
                                  <div class="row">

                                      <div class="form-group">
                                        <label for="">Libelle du maillon</label>
                                        <input type="text"  value="{{$maillon->Libelle}}" name="Libelle" id="" class="form-control" placeholder="Saisiez le libelle du maillon" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted" ><span style="color: red">le libelle est obligatoire</span></small>

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


    <div class="modal fade" id="{{'suprimer'.$maillon->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header coopvert">
              <h4 class="modal-title">Supprimer un maillon</h4>
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
                          <a href="{{url('/delete-maillon/'.$maillon->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
    <form action="{{url('/save-maillon')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header coopvert">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un maillon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">

            <div class="form-group">
              <label for="">Libelle du maillon</label>
              <input type="text"   name="Libelle" id="" class="form-control" placeholder="Saisiez le libelle" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle est obligatoire</span></small>

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
