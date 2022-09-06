@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Secretariats Executifs</div>
        </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/export_csvse">CVS</a>
                            <a class="dropdown-item" href="/export_excelse">Excel</a>
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
                            <th>Cooperatives </th>
                            <th>Denomination Secretariatss</th>
                            <th>Contact Secretariats </th>
                            <th>Salariés Hommes</th>
                            <th>Salariés Femmes </th>
                            <th>Debut Mandats</th>
                            <th>Fin Mandats</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($secretariatexecutifs as $secretariatexecutif)
                        <tr>
                            <td>{{$secretariatexecutif->cooperative->denomination}}</td>

                            <td>{{$secretariatexecutif->DenominationSecretariatCooperative}}</td>
                            <td>{{$secretariatexecutif->contactSecretariatCooperative}}</td>
                            <td>{{$secretariatexecutif->nombreSalarieHomme}}</td>
                            <td>{{$secretariatexecutif->nombreSalarieFemme}}</td>
                            <td>{{$secretariatexecutif->dateDebutMandat}}</td>
                            <td>{{$secretariatexecutif->dateFinMandat}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$secretariatexecutif->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$secretariatexecutif->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$secretariatexecutif->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-secretariatexecutif/'.$secretariatexecutif->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier fonctionement Secretariat Executif</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$secretariatexecutif->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Denomination Secretariat Cooperative</label>
                                                                <input type="text" value="{{$secretariatexecutif->DenominationSecretariatCooperative}}" name="DenominationSecretariatCooperative" id="" class="form-control" placeholder="Saisissez Denomination Secretariat Cooperative" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Contact Secretariat Cooperative</label>
                                                                <input type="text" value="{{$secretariatexecutif->contactSecretariatCooperative}}" name="contactSecretariatCooperative" id="" class="form-control" placeholder="saissisez le contact du Secretariat Cooperative   " aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre Salarié Homme</label>
                                                                <input type="text" value="{{$secretariatexecutif->nombreSalarieHomme}}" name="nombreSalarieHomme" id="" class="form-control" placeholder="nombre Salarie Homme" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre Salarié Femme</label>
                                                                <input type="text" value="{{$secretariatexecutif->nombreSalarieFemme}}" name="nombreSalarieFemme" id="" class="form-control" placeholder="nombre Salarie Femme" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Date Debut Mandat</label>
                                                                <input type="date" value="{{$secretariatexecutif->dateDebutMandat}}" name="dateDebutMandat" id="" class="form-control" placeholder=" date Debut Mandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Date Fin Mandat</label>
                                                                <input type="date" value="{{$secretariatexecutif->dateFinMandat}}" name="dateFinMandat" id="" class="form-control" placeholder="date Fin Mandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">cooperative</label>
                                                                <select name="cooperative_id" class="form-control" id="">
                                                                    @foreach ($cooperatives as $cooperative)
                                                                    <option value="{{$cooperative->id}}">{{$cooperative->denomination}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <small id="helpId" class="text-muted"><span style="color: red">la cooperative est obligatoire</span></small>
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


                                <div class="modal fade" id="{{'suprimer'.$secretariatexecutif->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer secretariat executif</h4>
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
                                                                    <a href="{{url('/delete-secretariatexecutif/'.$secretariatexecutif->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-secretariatexecutif')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Secretariat Executif</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Denomination Secretariat</label>
                                <input type="text" name="DenominationSecretariatCooperative" id="" class="form-control" placeholder="Saissisez le Denomination Secretariat Cooperative" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Contact Secretariat</label>
                                <input type="text" name="contactSecretariatCooperative" id="" class="form-control" placeholder="le contact Secretariat Cooperative" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">DateDebutMandat</label>
                                <input type="date" name="dateDebutMandat" id="" class="form-control" placeholder="dateDebutMandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">dateFinMandat</label>
                                <input type="date" name="dateFinMandat" id="" class="form-control" placeholder="dateDebutMandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">nombre Salarie Homme</label>
                                <input type="text" name="Nombre Salarié Homme" id="" class="form-control" placeholder="Saisisez nombre Salarié Homme" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">nombreSalarieFemme</label>
                                <input type="text" name="nombre Salarié Femme" id="" class="form-control" placeholder="le nombre Salarié Femme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Cooperatives</label>
                                <select name="cooperative_id" class="form-control" id="">
                                    @foreach ($cooperatives as $cooperative)
                                    <option value="{{$cooperative->id}}">{{$cooperative->denomination}}</option>
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
