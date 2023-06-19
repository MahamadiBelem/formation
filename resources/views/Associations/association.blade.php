@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Associations</div>
        </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <a href="{{url('/display-association-form')}}" class="btn btn-primary" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>

                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="asexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="asexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Dénominations </th>
                            <th>N° Recepisse</th>
                            <th>Date de Création</th>
                            <th>Genre</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Site Web</th>
                            <th>Nombre de Membre Hommes</th>
                            <th>Nombre de Membre Femmes</th>
                            <th>Types Organisations</th>
                            <th>Communes</th>
                            <th>Activités organes</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($associations as $association)
                        <tr>
                            <td>{{$association->denomination}}</td>
                            <td>{{$association->nroRecepisse}}</td>
                            <td>{{$association->dateCreation}}</td>
                            <td>{{$association->genre}}</td>
                            <td>{{$association->telephone}}</td>
                            <td>{{$association->email}}</td>
                            <td>{{$association->siteWeb}}</td>
                            <td>{{$association->nbreMembreH}}</td>
                            <td>{{$association->nbreMembreF}}</td>
                            <td>{{$association->type_organisation->libelletypeorganisation}}</td>
                            <td>{{$association->commune->libelleCommune}}</td>
                            <td>{{$association->activiteorgane->activitePrincipale}}</td>
                            <td>
                                <a href="{{url('/update-association/'.$association->id)}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></a>
                                <button data-toggle="modal" data-target="{{'#supprimer'.$association->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <a href="{{url('/association-view-detail/'.$association->id)}}" class="btn btn-outline-warning"><i class="fa fa-eye"></i></a>



                                <div class="modal fade" id="{{'supprimer'.$association->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer une association</h4>
                                                
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
                                                                    <a href="{{url('/delete-association/'.$association->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
                {{ $associations->onEachSide(5)->links() }}
            </div>
        </div>

    </div>
</div>
@endsection
