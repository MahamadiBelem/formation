@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <h3>
            <div align=center>Organes Cooperatives</div>
        </h3>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/export_excelfoc"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="/export_csvfoc" style="color: blue; font-weight:bold;">Csv <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Cooperatives</th>
                            <th>Nombre Ag Ordinaires</th>
                            <th>Nombre Rencontre Organes Gestions</th>
                            <th>Nombre Rencontre Organes Surveillances</th>
                            <th>Semestres</th>
                            <th>Année</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foncorgcoops as $foncorgcoop)
                        <tr>
                            <td>{{$foncorgcoop->cooperative->denomination}}</td>
                            <td>{{$foncorgcoop->nombreAgOrdinaire}}</td>
                            <td>{{$foncorgcoop->nombreRencontreOrganeGestion}}</td>
                            <td>{{$foncorgcoop->nombreRencontreSurveillance}}</td>
                            <td>{{$foncorgcoop->semestre}}</td>
                            <td>{{$foncorgcoop->annee}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$foncorgcoop->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$foncorgcoop->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$foncorgcoop->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-fonctionementorganecooperative/'.$foncorgcoop->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier un organe cooperative</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$foncorgcoop->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nbr Ag Ordinaire</label>
                                                                <input type="text" value="{{$foncorgcoop->nombreAgOrdinaire}}" name="nombreAgOrdinaire" id="" class="form-control" placeholder="Saissisez le nombre d'Ag Ordinaire" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Nbr Renc Organe Gestion</label>
                                                                <input type="text" value="{{$foncorgcoop->nombreRencontreOrganeGestion}}" name="nombreRencontreOrganeGestion" id="" class="form-control" placeholder="saissiser le nombre de Rencontre Organe Gestion" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Renc Organe Surveillance</label>
                                                                <input type="text" value="{{$foncorgcoop->nombreRencontreSurveillance}}" name="nombreRencontreSurveillance" id="" class="form-control" placeholder="saissiser le nombre Rencontre Surveillance" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Semestre</label>
                                                                <input type="text" value="{{$foncorgcoop->semestre}}" name="semestre" id="" class="form-control" placeholder="le semestre" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Annee</label>
                                                                <input type="text" value="{{$foncorgcoop->annee}}" name="annee" id="" class="form-control" placeholder="l'annee" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Cooperative</label>
                                                                <select name="cooperative_id" class="form-control" id="">
                                                                    @foreach ($cooperatives as $cooperative)
                                                                    <option value="{{$cooperative->id}}">{{$cooperative->denomination}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
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


                                <div class="modal fade" id="{{'suprimer'.$foncorgcoop->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer fonctionement organe cooperative</h4>
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
                                                                    <a href="{{url('/delete-fonctionementorganecooperative/'.$foncorgcoop->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-fonctionementorganecooperative')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">ajouter un fonctionement organe cooperative</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre Ag Ordinaire</label>
                                <input type="text" name="nombreAgOrdinaire" id="" class="form-control" placeholder="Saisisez le nombre Ag Ordinaire" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nbr Renc Org Gestion</label>
                                <input type="text" name="nombreRencontreOrganeGestion" id="" class="form-control" placeholder="le nombre Rencontre Organe Gestion" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Renc Organe Surveillance</label>
                                <input type="text" name="nombreRencontreSurveillance" id="" class="form-control" placeholder="nombre Rencontre Surveillance" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Semestre</label>
                                <input type="text" name="semestre" id="" class="form-control" placeholder="le semestre" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Annee</label>
                                <input type="text" name="annee" id="" class="form-control" placeholder="annee" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Cooperatives</label>
                                <select name="cooperative_id" class="form-control" id="">
                                    @foreach ($cooperatives as $cooperative)
                                    <option value="{{$cooperative->id}}">{{$cooperative->denomination}}</option>
                                    @endforeach
                                </select>
                                 <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
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
