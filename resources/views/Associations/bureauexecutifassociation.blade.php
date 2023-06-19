@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Bureau exécutif</div>
        </h3>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>

                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="beaexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="beaexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Associations</th>
                            <th>Nombre d'hommes </th>
                            <th>Nombre de femmes</th>
                            <th>Début du mandat</th>
                            <th>Fin du mandat</th>
                            <th>Nom Prénom du Président</th>
                            <th>Contact du Président</th>
                            <th>Genre</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bureauexecutifassociations as $bureauexecutifassociation)
                        <tr>
                            <td>{{$bureauexecutifassociation->association->denomination}}</td>
                            <td>{{$bureauexecutifassociation->nbreMembreH}}</td>
                            <td>{{$bureauexecutifassociation->nbreMembreM}}</td>
                            <td>{{$bureauexecutifassociation->debutMandat}}</td>
                            <td>{{$bureauexecutifassociation->finMandat}}</td>
                            <td>{{$bureauexecutifassociation->nomPrenomPresident}}</td>
                            <td>{{$bureauexecutifassociation->contactPresident}}</td>
                            <td>{{$bureauexecutifassociation->sexePresident}}</td>
                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$bureauexecutifassociation->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#supprimer'.$bureauexecutifassociation->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$bureauexecutifassociation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-bureauexecutifassociation/'.$bureauexecutifassociation->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier fonctionement Secretariat Executif</h5>
                                                    
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$bureauexecutifassociation->id}}" type="text">
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Nombre d'hommes</label>
                                                                    <input type="text" value="{{$bureauexecutifassociation->nbreMembreH}}" name="nbreMembreH" id="" class="form-control" placeholder="20" aria-describedby="helpId" required>
                                                                    <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Nombre de femmes</label>
                                                                    <input type="text" value="{{$bureauexecutifassociation->nbreMembreM}}" name="nbreMembreM" id="" class="form-control" placeholder="10 " aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Début du mandat</label>
                                                                    <input type="date" value="{{$bureauexecutifassociation->debutMandat}}" name="debutMandat" id="" class="form-control" aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Fin du mandat</label>
                                                                    <input type="date" value="{{$bureauexecutifassociation->finMandat}}" name="finMandat" id="" class="form-control" aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Nom et Prénom(s) du Président</label>
                                                                    <input type="text" value="{{$bureauexecutifassociation->nomPrenomPresident}}" name="nomPrenomPresident" id="" class="form-control" placeholder="SANFO Bakary" aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Contact du Président</label>
                                                                    <input type="text" value="{{$bureauexecutifassociation->contactPresident}}" name="contactPresident" id="" class="form-control" aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="">Le genre du Président</label>
                                                                    <input type="text" value="{{$bureauexecutifassociation->sexePresident}}" name="sexePresident" id="" class="form-control" placeholder="M/F" aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"><span style="color: red"></span></small>
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


                                <div class="modal fade" id="{{'supprimer'.$bureauexecutifassociation->id}}">
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
                                                                    <a href="{{url('/delete-bureauexecutifassociation/'.$bureauexecutifassociation->id)}}" class="btn btn-danger">Supprimer <i class="fa fa-trash" style="color: white"></i></a>
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


<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{url('/save-bureauexecutifassociation')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un bureau exécutif</h5>
                    
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
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Contact du SP</label>
                                <input type="text" name="contactPresident" id="" class="form-control" placeholder="+226 70101010" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Début du mandat </label>
                                <input type="date" name="debutMandat" id="" class="form-control" placeholder="20/02/2020" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Fin du mandat</label>
                                <input type="date" name="finMandat" id="" class="form-control" placeholder="20/02/2022" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nom et prénom(s) du Président</label>
                                <input type="text" name="nomPrenomPresident" id="" class="form-control" placeholder="TOE Ananias" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Genre</label>
                                <input type="text" name="sexePresident" id="" class="form-control" placeholder="Masculin/Feminin" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Associations</label>
                                <select name="association_id" class="form-control" id="">
                                    @foreach ($associations as $association)
                                    <option value="{{$association->id}}">{{$association->denomination}}</option>
                                    @endforeach
                                </select>
                                <small id="helpId" class="text-muted"><span style="color: red">Association obligatoire</span></small>
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


