@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <a href="{{url('/display-apprenant-form')}}" class="btn btn-primary" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>
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
                  <th>Matricule </th>
                  <th>Nom </th>
                  <th>Prenom </th>
                  <th>Sexe </th>
                  <th>Contact </th>
                  <th>Localités </th>
                  <th>PersonneCas de besoin </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($apprenants as $apprenant)
                  <tr>
                    <td>{{$apprenant->matricule}}</td>
                    <td>{{$apprenant->nom}}</td>
                    <td>{{$apprenant->prenom}}</td> 
                    <td>{{$apprenant->sexe}}</td>
                    <td>{{$apprenant->contact}}</td>
                    <td>{{$apprenant->localites}}</td>  
                    <td></td> 
                    <td>
                          <a  href="{{url('/update-apprenant-view-form/'.$apprenant->id)}}"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></a>
                          <button data-toggle="modal" data-target="{{'#suprimer'.$apprenant->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                      
                          <a href="{{url('/apprenant-view-detail/'.$apprenant->id)}}" class="btn btn-outline-warning"><i class="fa fa-eye"></i></a>

                             

    <div class="modal fade" id="{{'suprimer'.$apprenant->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer un apprenant </h4>
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
                          <a href="{{url('/delete-apprenant/'.$apprenant->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
              {{ $apprenants->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>
@endsection