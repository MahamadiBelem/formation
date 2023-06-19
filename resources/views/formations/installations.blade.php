@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <a  class="btn btn-primary" href="{{url('/display-installation-form')}}" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>
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
                  <!--th>Domaine d'installation </th-->
                  <th>Source de financement </th>
                  <th>Année de sortie </th>
                  <th>Date d'installation</th>
                  <th>lieu d'installation </th>
                  <th>Structure de formation </th>
                  <th>kits ? </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($installations as $installation)
                  <tr>
                    <td>
                      Matricule :{{$installation->affecterapprenants->apprenant->matricule}}
                      Nom : {{$installation->affecterapprenants->apprenant->nom}}
                      Prenom: {{$installation->affecterapprenants->apprenant->prenom}}
                    </td>
                    <!--td>
                       {{$installation->domainesinstallation->libelleDomaine}}
                    </td-->
                    <td>
                      {{$installation->sourcefinancements->libelleSourceFinancement}}
                    </td>
                    <td>
                      {{$installation->annees}}
                    </td>
                    <td>
                      {{$installation->dateInstallation}}
                    </td>
                    <td>
                      {{$installation->lieuInstallation}}
                    </td>
                    <td>
                    <td></td>
                     @if ($installation->confirmedKits)
                         <span style="background-color: green">sortie </span>
                     @else
                      <span style="background-color: red"> non sortie  </span>
                     @endif
                    </td>
                    <td>
                         
                          <button data-toggle="modal" data-target="{{'#suprimer'.$installation->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                          
                       
                      

    <div class="modal fade" id="{{'suprimer'.$installation->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header modal-delete-header">
              <h4 class="modal-title">Supprimer une installation</h4>
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
                          <a href="{{url('/delete-installation/'.$installation->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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

              {{ $installations->onEachSide(5)->links() }}
        </div>
    </div>
  
</div>
</div>

<!-- Modal -->

@endsection