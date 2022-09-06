@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Bureau Exécutif</div>
        </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/beexport_csv">CVS</a>
                            <a class="dropdown-item" href="/beexport_excel">Excel</a>
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
                            <th>Chambre régionale</th>
                            <th>Dénomination du Président</th>
                            <th>Contact</th>
                            <th>Nombre membre AC (Hommes)</th>
                            <th>Nombre membre AC (Femmes)</th>
                            <th>Durée du mandat</th>
                            <th>Date du début du mandat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bes as $be)
                        <tr>
                            <td>{{$be->chambre_regionale->libelleCRA}}</td>
                            <td>{{$be->NomPrenomPresident}}</td>
                            <td>{{$be->Contact}}</td>
                            <td>{{$be->NbreMembreAssembleConsulaireH}}</td>
                            <td>{{$be->NbreMembreAssembleConsulaireF}}</td>
                            <td>{{$be->DureeMandat}}</td>
                            <td>{{$be->DateDebutMandat}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$be->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$be->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$be->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-be/'.$be->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Bureau Exécutif</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$be->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Dénomination du Président</label>
                                                                <input type="text" value="{{$be->NomPrenomPresident}}" name="NomPrenomPresident" id="" class="form-control" placeholder="NomPrenomPresident" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Contact</label>
                                                                <input type="text" value="{{$be->Contact}}" name="Contact" id="" class="form-control" placeholder="Contact" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre membre AC (Hommes)</label>
                                                                <input type="text" value="{{$be->NbreMembreAssembleConsulaireH}}" name="NbreMembreAssembleConsulaireH" id="" class="form-control" placeholder="NbreMembreAssembleConsulaireH" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre membre AC (Femmes)</label>
                                                                <input type="text" value="{{$be->NbreMembreAssembleConsulaireF}}" name="NbreMembreAssembleConsulaireF" id="" class="form-control" placeholder="NbreMembreAssembleConsulaireF" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Durée du Mandat</label>
                                                                <input type="text" value="{{$be->DureeMandat}}" name="DureeMandat" id="" class="form-control" placeholder="Durée du Mandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Date du début du mandat</label>
                                                                <input type="date" value="{{$be->DateDebutMandat}}" name="DateDebutMandat" id="" class="form-control" placeholder="DateDebutMandat" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Chambre régionale</label>
                                                                <select name="chambre_regionale_id" class="form-control" id="">
                                                                    @foreach ($cra as $cr)
                                                                    <option value="{{$cr->id}}">{{$cr->libelleCRA}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <small id="helpId" class="text-muted"><span style="color: red">La chambre régionale est obligatoire</span></small>
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


                                <div class="modal fade" id="{{'suprimer'.$be->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer Bureau Exécutif</h4>
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
                                                                    <a href="{{url('/delete-be/'.$be->id)}}" class="btn btn-danger">Supprimer<i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-be')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Bureau Exécutif</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Dénomination du Président</label>
                                <input type="text" name="NomPrenomPresident" id="" class="form-control" placeholder="NomPrenomPresident" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="text" name="Contact" id="" class="form-control" placeholder="Contact" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre membre AC (Hommes)</label>
                                <input type="text" name="NbreMembreAssembleConsulaireH" id="" class="form-control" placeholder="NbreMembreAssembleConsulaireH" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre membre AC (Femmes)</label>
                                <input type="text" name="NbreMembreAssembleConsulaireF" id="" class="form-control" placeholder="NbreMembreAssembleConsulaireF" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Durée du mandat</label>
                                <input type="text" name="DureeMandat" id="" class="form-control" placeholder="DureeMandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date du début du mandat</label>
                                <input type="date" name="DateDebutMandat" id="" class="form-control" placeholder="DateDebutMandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Chambre régionale</label>
                                <select name="chambre_regionale_id" class="form-control" id="">
                                    @foreach ($cra as $cr)
                                    <option value="{{$cr->id}}">{{$cr->libelleCRA}}</option>
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


