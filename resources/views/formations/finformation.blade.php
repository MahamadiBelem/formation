@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <a  class="btn btn-primary" href="{{url('/display-fin-formation-form')}}" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>
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
                  <th>Apprenant </th>
                  <th>Formation </th>
                  <th>Centre formation </th>
                  <th>Date de fin de formation  </th>
                  <th>Date d'inscription</th>
                  <th>Années de fin de formation </th>
                  <th>Motif </th>
                  <th>Sortie </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($fins as $fin)
                  <tr>
                    <td>
                      Matricule :{{$fin->affecterapprenants->apprenant->matricule}}
                      Nom : {{$fin->affecterapprenants->apprenant->nom}}
                      Prenom: {{$fin->affecterapprenants->apprenant->prenom}}
                    </td>
                    <td>
                       {{$fin->affecterapprenants->formation->libelleFormations }}
                    </td>
                    <td>
                      {{$fin->affecterapprenants->centreformation->denomination}}
                    </td>
                    <td>
                      {{$fin->dateFinFormation}}
                    </td>
                    
                    <td>
                      {{$fin->dateInscription}}
                    </td>
                    <td>
                      {{$fin->anneesFinFormation}}
                    </td>
                    <td>
                      {{$fin->motif}}
                    </td>
                    <td>
                     @if ($fin->confirmedSortie)
                         <span style="background-color: green">sortie </span>
                     @else
                      <span style="background-color: red"> non sortie  </span>
                     @endif
                    </td>
                    <td>
                         
                          <button data-toggle="modal" data-target="{{'#suprimer'.$fin->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                          
                       
                      

    <div class="modal fade" id="{{'suprimer'.$fin->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer une fin de formation</h4>
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
                          <a href="{{url('/delete-fin-formation/'.$fin->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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

              {{ $fins->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->

@endsection