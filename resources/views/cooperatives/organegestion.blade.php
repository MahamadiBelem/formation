@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <h3>
            <div align=center>Organes Gestions</div>
        </h3>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                              <a class="dropdown-item" href="/export_excelog"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="/export_csvog" style="color: blue; font-weight:bold;">Csv <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Membre Hommes</th>
                            <th>Membre Femmes</th>
                            <th>Debut Mandats</th>
                            <th>Fin Mandats</th>
                            <th>Mandat Consecutifs</th>
                            <th>Presidents</th>
                            <th>Contact Presidents</th>
                            <th>Sexes</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organegestions as $organegestion)
                        <tr>
                            <td>{{$organegestion->cooperative->denomination}}</td>
                            <td>{{$organegestion->nombreMenbreHomme}}</td>
                            <td>{{$organegestion->nombreMenbreFemmme}}</td>
                            <td>{{$organegestion->dateDebutMandat}}</td>
                            <td>{{$organegestion->dateFinMandat}}</td>
                            <td>{{$organegestion->nombreMandatConsecutif}}</td>
                            <td>{{$organegestion->nomPrenomPresident}}</td>
                            <td>{{$organegestion->contactPresident}}</td>
                            <td>{{$organegestion->sexePresident}}</td>
                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$organegestion->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$organegestion->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$organegestion->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-organegestion/'.$organegestion->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier le fonctionement l'organe de gestion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$organegestion->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMenbreHomme</label>
                                                                <input type="text" value="{{$organegestion->nombreMenbreHomme}}" name="nombreMenbreHomme" id="" class="form-control" placeholder="Saisissez le nombre de MenbreHomme" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMenbreFemmme</label>
                                                                <input type="text" value="{{$organegestion->nombreMenbreFemmme}}" name="nombreMenbreFemmme" id="" class="form-control" placeholder="saissisez le nombre de Menbre Femmme" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">DateDebutMandat</label>
                                                                <input type="date" value="{{$organegestion->dateDebutMandat}}" name="dateDebutMandat" id="" class="form-control" placeholder="date Debut Mandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">DateFinMandat</label>
                                                                <input type="date" value="{{$organegestion->dateFinMandat}}" name="dateFinMandat" id="" class="form-control" placeholder="date Fin Mandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMandatConsecutif</label>
                                                                <input type="text" value="{{$organegestion->nombreMandatConsecutif}}" name="nombreMandatConsecutif" id="" class="form-control" placeholder=" le nombre Mandat Consecutif" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NomPrenomPresident</label>
                                                                <input type="text" value="{{$organegestion->nomPrenomPresident}}" name="nomPrenomPresident" id="" class="form-control" placeholder="nom Prenom President" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">ContactPresident</label>
                                                                <input type="text" value="{{$organegestion->contactPresident}}" name="contactPresident" id="" class="form-control" placeholder="contact President" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">SexePresident</label>
                                                                <select name="sexePresident" id="" class="form-control">
                                                                    <option value="MASCULIN">MASCULIN</option>
                                                                    <option value="FEMININ">FEMININ</option>
                                                                </select>
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


                                <div class="modal fade" id="{{'suprimer'.$organegestion->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer organe gestion</h4>
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
                                                                    <a href="{{url('/delete-organegestion/'.$organegestion->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-organegestion')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un organe gestion </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NombreMenbreHomme</label>
                                <input type="text" name="nombreMenbreHomme" id="" class="form-control" placeholder="Saisisez le nombre nombre Menbre Homme" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NombreMenbreFemmme</label>
                                <input type="text" name="nombreMenbreFemmme" id="" class="form-control" placeholder="le nombre Menbre Femmme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">DateDebutMandat</label>
                                <input type="date" name="dateDebutMandat" id="" class="form-control" placeholder="date Debut Mandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">DateFinMandat</label>
                                <input type="date" name="dateFinMandat" id="" class="form-control" placeholder="date Debut Mandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NombreMandatConsecutif</label>
                                <input type="text" name="nombreMandatConsecutif" id="" class="form-control" placeholder="Saisissez le nombre Mandat Consecutif" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NomPrenomPresident</label>
                                <input type="text" name="nomPrenomPresident" id="" class="form-control" placeholder="le nom Prenom President" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">ContactPresident</label>
                                <input type="text" name="contactPresident" id="" class="form-control" placeholder="Saisissez le contact President" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">SexePresident</label>
                                <select name="sexePresident" id="" class="form-control">
                                    <option value="MASCULIN">MASCULIN</option>
                                    <option value="FEMININ">FEMININ</option>
                                </select>
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
