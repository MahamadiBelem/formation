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
                  <th>Regions </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($regions as $region)
                  <tr>
                    <td>{{$region->libelleRegion}}</td>
                      <td>
                          <button  data-toggle="modal" data-target="'#modifier'.$region->id"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                          <button data-toggle="modal" data-target="'#suprimer'.$region->id" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
    <div class="modal fade" id="{{'modifier'.$region->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modifier la forme de la citerne</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="row">
                 <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="{{url('/update-forme-citerne')}}" method="POST">
                      @csrf
                      <input type="text" hidden name="id" value="{{$forme->id}}">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12  col-md-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Type denvoyeur</label>
                            <input type="text" name="libelle_forme" value="{{$forme->libelle_forme}}" class="form-control" placeholder="forme ">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-sm-12  col-md-12">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                          <button type="submit" class="btn btn-success">Enregistrer <i class="fa fa-save" style="color: white"></i></button>
                        </div>
                      </div>
                     </form>
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
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une region</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="">Region</label>
                <input type="text" name="libelleRegion" id="" class="form-control" placeholder="la region" aria-describedby="helpId">
                <small id="helpId" class="text-muted" ><span style="color: red">le nom de la region est obligatoire</span></small>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>

@endsection