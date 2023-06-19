@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Commissariat au compte </div>
        </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>

                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="cacexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="cacexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Nombre d'hommes </th>
                            <th>Nombre de femmes</th>
                            <th>Début du mandat</th>
                            <th>Fin du mandat</th>
                            <th>Nombre de mandats consécutifs </th>
                            <th>Nom Prénom du Rapporteur</th>
                            <th>Contact du Rapporteur</th>
                            <th>Genre</th>
                            <th>Associations</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commissariataucompteassociations as $commissariataucompteassociation)
                        <tr>
                            <td>{{$commissariataucompteassociation->nbreMembreH}}</td>
                            <td>{{$commissariataucompteassociation->nbreMembreM}}</td>
                            <td>{{$commissariataucompteassociation->debutMandat}}</td>
                            <td>{{$commissariataucompteassociation->finMandat}}</td>
                            <td>{{$commissariataucompteassociation->nbreMandatConsecuti}}</td>
                            <td>{{$commissariataucompteassociation->nomPrenomRapporteur}}</td>
                            <td>{{$commissariataucompteassociation->contactRapporteur}}</td>
                            <td>{{$commissariataucompteassociation->sexeRapporteur}}</td>
                            <td>{{$commissariataucompteassociation->association->denomination}}</td>
                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$commissariataucompteassociation->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#supprimer'.$commissariataucompteassociation->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$commissariataucompteassociation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-commissariataucompteassociation/'.$commissariataucompteassociation->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier fonctionement Secretariat Executif</h5>
                                                    
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$commissariataucompteassociation->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre d'hommes</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->nbreMembreH}}" name="nbreMembreH" id="" class="form-control" placeholder="20" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre de femmes</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->nbreMembreM}}" name="nbreMembreM" id="" class="form-control" placeholder="10 " aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Début du mandat</label>
                                                                <input type="date" value="{{$commissariataucompteassociation->debutMandat}}" name="debutMandat" id="" class="form-control" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Fin du mandat</label>
                                                                <input type="date" value="{{$commissariataucompteassociation->finMandat}}" name="finMandat" id="" class="form-control" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre de mandats consécutifs</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->nbreMandatConsecuti}}" name="nbreMandatConsecuti" id="" class="form-control" placeholder="2" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nom et prénom(s) du Rapporteur</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->nomPrenomRapporteur}}" name="nomPrenomRapporteur" id="" class="form-control" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Contact du Rapporteur</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->contactRapporteur}}" name="contactRapporteur" id="" class="form-control" placeholder="+226 78747579" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Le genre du Rapporteur</label>
                                                                <input type="text" value="{{$commissariataucompteassociation->sexeRapporteur}}" name="sexeRapporteur" id="" class="form-control" placeholder="M/F" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Association</label>
                                                                <select name="association_id" class="form-control" id="">
                                                                    @foreach ($associations as $association)
                                                                    <option value="{{$association->id}}">{{$association->denomination}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <small id="helpId" class="text-muted"><span style="color: red">L'association est obligatoire</span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></button>
                                                    <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="modal fade" id="{{'supprimer'.$commissariataucompteassociation->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer un bureau exécutif </h4>
                                                
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
                                                                    <a href="{{url('/delete-commissariataucompteassociation/'.$commissariataucompteassociation->id)}}" class="btn btn-danger">Supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
                {{ $commissariataucompteassociations->onEachSide(5)->links() }}
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{url('/save-commissariataucompteassociation')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un commissariat au compte</h5>
                    
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre d'hommes</label>
                                <input type="text" name="nbreMembreH" id="" class="form-control" placeholder="20" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de femmes</label>
                                <input type="text" name="nbreMembreM" id="" class="form-control" placeholder="10" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Début du mandat </label>
                                <input type="date" name="debutMandat" id="" class="form-control" placeholder="20/02/2020" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Fin du mandat</label>
                                <input type="date" name="finMandat" id="" class="form-control" placeholder="20/02/2022" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre de mandats consécutifs</label>
                                <input type="text" name="nbreMandatConsecuti" id="" class="form-control" placeholder="2" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nom et prénom(s) du Rapporteur</label>
                                <input type="text" name="nomPrenomRapporteur" id="" class="form-control" placeholder="TOE Ananias" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Contact du Rapporteur</label>
                                <input type="text" name="contactRapporteur" id="" class="form-control" placeholder="+226 70101010" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Genre</label>
                                <input type="text" name="sexeRapporteur" id="" class="form-control" placeholder="Masculin ou Feminin" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Association</label>
                            <select name="association_id" class="form-control" id="">
                                @foreach ($associations as $association)
                                <option value="{{$association->id}}">{{$association->denomination}}</option>
                                @endforeach
                            </select>
                            <small id="helpId" class="text-muted"><span style="color: red">L'association est obligatoire</span></small>
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









