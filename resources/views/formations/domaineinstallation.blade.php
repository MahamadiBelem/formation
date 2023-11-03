@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <a  class="btn btn-primary" href="{{url('/display-domaine-installation-form')}}" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>
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
                  <th>Kits Projet</th>
                  <th>Kits Associés</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($domaines as $domaine)
                  <tr>
                    <td>{{$domaine->libelleDomaine}}</td>
                    <td>
                      @foreach ($domaine->kits as $item)
                          <div>Kit:{{$item->libelleKits}} Quantite:{{$item->quantites}}</div>
                      @endforeach
                    </td> 
                    <td>
                          <a  href="{{url('/display-domaine-installation-update-form/'.$domaine->id)}}"   class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></a>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$domaine->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                          
                       
                      

    <div class="modal fade" id="{{'suprimer'.$domaine->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer un projet d installation</h4>
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
                          <a href="{{url('/delete-domaine-installation/'.$domaine->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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

              {{ $domaines->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/save-domaine-installation')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-header modal-header-designed">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un projet d installation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="">Kits projet </label>
              <input type="text"   name="libelleDomaine" id="" class="form-control" placeholder="le libelle d installation" aria-describedby="helpId">
              <small id="helpId" class="text-muted" ><span style="color: red">le libelle du projet est obligatoire</span></small>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="">Kits associés</label>
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
        <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
        <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>
  </div>
</div>

@endsection