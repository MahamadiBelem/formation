@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <h3>
            <div align=center>Organes Controles</div>
        </h3>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/export_csvoc">CVS</a>
                            <a class="dropdown-item" href="/export_exceloc">Excel</a>
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
                            <th>Membre Hommes</th>
                            <th>Membre Femmes</th>
                            <th>DebutMandats</th>
                            <th>FinMandats </th>
                            <th>Mandat Consecutifs</th>
                            <th>1er Responsables</th>
                            <th>Contacts</th>
                            <th>Sexes</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organecontroles as $organecontrole)
                        <tr>
                            <td>{{$organecontrole->cooperative->denomination}}</td>
                            <td>{{$organecontrole->nombreMenbreHomme}}</td>
                            <td>{{$organecontrole->nombreMenbreFemmme}}</td>
                            <td>{{$organecontrole->dateDebutMandat}}</td>
                            <td>{{$organecontrole->dateFinMandat}}</td>
                            <td>{{$organecontrole->nombreMandatConsecutif}}</td>
                            <td>{{$organecontrole->nomPrenomPremierResponsable}}</td>
                            <td>{{$organecontrole->contactPremierResponsable}}</td>
                            <td>{{$organecontrole->sexePremierResponsable}}</td>
                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$organecontrole->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$organecontrole->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$organecontrole->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-organecontrole/'.$organecontrole->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier le fonctionement de l'organe de controle</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$organecontrole->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMenbreHomme</label>
                                                                <input type="text" value="{{$organecontrole->nombreMenbreHomme}}" name="nombreMenbreHomme" id="" class="form-control" placeholder="Saisissez le nombre nombre de MenbreHomme" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMenbreFemmme</label>
                                                                <input type="text" value="{{$organecontrole->nombreMenbreFemmme}}" name="nombreMenbreFemmme" id="" class="form-control" placeholder="saissisez le nombre nombre Menbre Femmme" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">DateDebutMandat</label>
                                                                <input type="date" value="{{$organecontrole->dateDebutMandat}}" name="dateDebutMandat" id="" class="form-control" placeholder="dateDebutMandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">DateFinMandat</label>
                                                                <input type="date" value="{{$organecontrole->dateFinMandat}}" name="dateFinMandat" id="" class="form-control" placeholder="dateFinMandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NombreMandatConsecutif</label>
                                                                <input type="text" value="{{$organecontrole->nombreMandatConsecutif}}" name="nombreMandatConsecutif" id="" class="form-control" placeholder=" le nombre Mandat Consecutif" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NomPrenomPremierResponsable</label>
                                                                <input type="text" value="{{$organecontrole->nomPrenomPremierResponsable}}" name="nomPrenomPremierResponsable" id="" class="form-control" placeholder="nom Prenom PremierResponsable" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">ContactPremierResponsable</label>
                                                                <input type="text" value="{{$organecontrole->contactPremierResponsable}}" name="contactPremierResponsable" id="" class="form-control" placeholder="contact Premier Responsable" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">SexePremierResponsable</label>
                                                                <select name="sexePremierResponsable" id="" class="form-control">
                                                                    <option value="MASCULIN">MASCULIN</option>
                                                                    <option value="FEMININ">FEMININ</option>
                                                                </select>
                                                                <small id="helpId" class="text-muted"><span style="color: red">  </span></small>
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
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
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


                                <div class="modal fade" id="{{'suprimer'.$organecontrole->id}}">
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
                                                                    <a href="{{url('/delete-organecontrole/'.$organecontrole->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-organecontrole')}}" method="POST">
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
                                <input type="text" name="nombreMenbreHomme" id="" class="form-control" placeholder="Saisisez le nombre de Menbre Homme" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NombreMenbreFemmme</label>
                                <input type="text" name="nombreMenbreFemmme" id="" class="form-control" placeholder="le nombre Menbre Femmme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
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
                                <input type="text" name="nombreMandatConsecutif" id="" class="form-control" placeholder="Saisisez le nombre Mandat Consecutif" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NomPrenomPremierResponsable</label>
                                <input type="text" name="nomPrenomPremierResponsable" id="" class="form-control" placeholder="le nom Prenom Premier Responsable" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">ContactPremierResponsable</label>
                                <input type="text" name="contactPremierResponsable" id="" class="form-control" placeholder="SaisisSez le contact PremierResponsable" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">SexePremierResponsable</label>
                                <select name="sexePremierResponsable" id="" class="form-control">
                                    <option value="MASCULIN">MASCULIN</option>
                                    <option value="FEMININ">FEMININ</option>
                                </select>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
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
