@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Chambres Régionales</div>
        </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <a href="{{url('/display-cr-form')}}" class="btn btn-primary" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></a>

                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="crexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="crexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Communes</th>
                            <th>Libelle de la CRA </th>
                            <th>Telephone</th>
                            <th>E-mail</th>
                            <th>Boite postale</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Site Web</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cra as $cr)
                        <tr>
                            <td>@if(isset($cr->commune->libelleCommune))
                                {{$cr->commune->libelleCommune}}
                                @endif
                            </td>
                            <td>{{$cr->libelleCRA}}</td>
                            <td>{{$cr->telephone}}</td>
                            <td>{{$cr->email}}</td>
                            <td>{{$cr->boitepostal}}</td>
                            <td>{{$cr->gpslongitude}}</td>
                            <td>{{$cr->gpslatitude}}</td>
                            <td>{{$cr->siteWeb}}</td>
                            <td>
                                <a href="{{url('/update-cr/'.$cr->id)}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></a>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$cr->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <a href="{{url('/cr-view-detail/'.$cr->id)}}" class="btn btn-outline-warning"><i class="fa fa-eye"></i></a>



                                <div class="modal fade" id="{{'suprimer'.$cr->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer une chambre regionale</h4>
                                                
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sms-12">
                                                                    <span style="color: red;font-weight:bold;font-size:0.5cm">Voulez-vous effectuer cette action<i class="fa fa-exclamation-triangle fa-3x" style="color: red;"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12  col-md-12">
                                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                                                                    <a href="{{url('/delete-cr/'.$cr->id)}}" class="btn btn-danger">Supprimer<i class="fa fa-trash" style="color: white"></i></a>
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
                {{ $cra->onEachSide(5)->links() }}
            </div>
        </div>

    </div>
</div>
@endsection
