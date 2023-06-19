@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Sécretariats Exécutifs</div>
        </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="seaexport_excel"  style="color: green; font-weight:bold;">Excel <i class="fa fa-file-excel"></i></button></a>
                            <a class="dropdown-item" href="seaexport_csv" style="color: blue; font-weight:bold;">CSV <i class="fa fa-file-csv"></i></button></a>
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
                            <th>Associations </th>
                            <th>Année</th>
                            <th>Nom Prénom SP</th>
                            <th>Contact SP</th>
                            <th>Nombre de salaire PH</th>
                            <th>Nombre de salaire PF</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($secretariatexecutifassociations as $secretariatexecutifassociation)
                        <tr>
                            <td>{{$secretariatexecutifassociation->association->denomination}}</td>

                            <td>{{$secretariatexecutifassociation->annee}}</td>
                            <td>{{$secretariatexecutifassociation->nomPrenomSP}}</td>
                            <td>{{$secretariatexecutifassociation->contactSP}}</td>
                            <td>{{$secretariatexecutifassociation->nbreSalairePH}}</td>
                            <td>{{$secretariatexecutifassociation->nbreSalairePF}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$secretariatexecutifassociation->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#supprimer'.$secretariatexecutifassociation->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$secretariatexecutifassociation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-secretariatexecutifassociation/'.$secretariatexecutifassociation->id)}}" method="POST">
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
                                                            <input hidden name="id" value="{{$secretariatexecutifassociation->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Année</label>
                                                                <input type="text" value="{{$secretariatexecutifassociation->annee}}" name="annee" id="" class="form-control" placeholder="2022" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">Nom et Prénom(s) du SP</label>
                                                                <input type="text" value="{{$secretariatexecutifassociation->nomPrenomSP}}" name="nomPrenomSP" id="" class="form-control" placeholder="TOE Adama " aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Contact du SP</label>
                                                                <input type="text" value="{{$secretariatexecutifassociation->contactSP}}" name="contactSP" id="" class="form-control" placeholder="+226 70101010" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre de Salariés PH</label>
                                                                <input type="text" value="{{$secretariatexecutifassociation->nbreSalairePH}}" name="nbreSalairePH" id="" class="form-control" placeholder="20" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">Nombre de salariés PF</label>
                                                                <input type="text" value="{{$secretariatexecutifassociation->nbreSalairePF}}" name="nbreSalairePF" id="" class="form-control" placeholder="20" aria-describedby="helpId">
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


                                                    <div class="row">

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


                                <div class="modal fade" id="{{'supprimer'.$secretariatexecutifassociation->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer le sécretariat exécutif</h4>
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
                                                                    <a href="{{url('/delete-secretariatexecutifassociation/'.$secretariatexecutifassociation->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-secretariatexecutifassociation')}}" method="POST">
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
                                <label for="">Année</label>
                                <input type="text" name="annee" id="" class="form-control" placeholder="2020" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nom et prénom du SP</label>
                                <input type="text" name="nomPrenomSP" id="" class="form-control" placeholder="TOE Adama" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Contact du SP</label>
                                <input type="text" name="contactSP" id="" class="form-control" placeholder="+226 70101010" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre de salariés PH</label>
                                <input type="text" name="nbreSalairePH" id="" class="form-control" placeholder="20" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre Salariés PF</label>
                                <input type="text" name="nbreSalairePF" id="" class="form-control" placeholder="20" aria-describedby="helpId" required>
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
