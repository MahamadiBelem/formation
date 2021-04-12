@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <a href="{{url('/display-centre-formation-form')}}" class="btn btn-primary" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>
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
                  <th>Denomination </th>
                  <th>Localisation </th>
                  <th>Status </th>
                  <th>Capacité </th>
                  <th>Commune </th>
                  <th>Regime </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($centres as $centre)
                  <tr>
                    <td>{{$centre->denomination}}</td>
                    <td>{{$centre->localisation}}</td>
                    <td>{{$centre->statut}}</td> 
                    <td>{{$centre->capacite}}</td>
                    <td>{{$centre->commune->libelleCommune}}</td>
                    <td>{{$centre->regime->libelleRegime}}</td>   
                    <td>
                          <a  href="{{url('/update-centre-formation/'.$centre->id)}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></a>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$centre->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                          <a href="{{url('/centre-formation-view-detail/'.$centre->id)}}" class="btn btn-outline-warning"><i class="fa fa-eye"></i></a>

                             

    <div class="modal fade" id="{{'suprimer'.$centre->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer un centre de formation </h4>
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
                          <a href="{{url('/delete-centre/'.$centre->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
              {{ $centres->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>
@endsection