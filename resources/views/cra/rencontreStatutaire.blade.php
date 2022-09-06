@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Rencontres Statutaires</div>
        </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/rstatexport_csv">CVS</a>
                            <a class="dropdown-item" href="/rstatexport_excel">Excel</a>
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
                            <th>NbreAsConsulairePrevAn</th>
                            <th>NbreRencBurExecutif</th>
                            <th>NbreRencComOrganisation</th>
                            <th>NbreRencComFinan</th>
                            <th>NbreRencComFoncierDecen</th>
                            <th>NbreRencComPromoModerAgri</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rstats as $rstat)
                        <tr>
                            <td>{{$rstat->chambre_regionale->libelleCRA}}</td>
                            <td>{{$rstat->NbreAsConsulairePrevAn}}</td>
                            <td>{{$rstat->NbreRencBurExecutif}}</td>
                            <td>{{$rstat->NbreRencComOrganisation}}</td>
                            <td>{{$rstat->NbreRencComFinan}}</td>
                            <td>{{$rstat->NbreRencComFoncierDecen}}</td>
                            <td>{{$rstat->NbreRencComPromoModerAgri}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$rstat->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$rstat->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$rstat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-rstat/'.$rstat->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Rencontre Statutaire</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$rstat->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreAsConsulairePrevAn</label>
                                                                <input type="text" value="{{$rstat->NbreAsConsulairePrevAn}}" name="NbreAsConsulairePrevAn" id="" class="form-control" placeholder="NbreAsConsulairePrevAn" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">NbreRencBurExecutif</label>
                                                                <input type="text" value="{{$rstat->NbreRencBurExecutif}}" name="NbreRencBurExecutif" id="" class="form-control" placeholder="NbreRencBurExecutif" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreRencComOrganisation</label>
                                                                <input type="text" value="{{$rstat->NbreRencComOrganisation}}" name="NbreRencComOrganisation" id="" class="form-control" placeholder="NbreRencComOrganisation" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreRencComFinan</label>
                                                                <input type="text" value="{{$rstat->NbreRencComFinan}}" name="NbreRencComFinan" id="" class="form-control" placeholder="NbreRencComFinan" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreRencComFoncierDecen</label>
                                                                <input type="text" value="{{$rstat->NbreRencComFoncierDecen}}" name="NbreRencComFoncierDecen" id="" class="form-control" placeholder="NbreRencComFoncierDecen" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreRencComPromoModerAgri</label>
                                                                <input type="text" value="{{$rstat->NbreRencComPromoModerAgri}}" name="NbreRencComPromoModerAgri" id="" class="form-control" placeholder="NbreRencComPromoModerAgri" aria-describedby="helpId">
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


                                <div class="modal fade" id="{{'suprimer'.$rstat->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer Rencontre Statutaire</h4>
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
                                                                    <a href="{{url('/delete-rstat/'.$rstat->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-rstat')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Rencontre Statutaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NbreAsConsulairePrevAn</label>
                                <input type="text" name="NbreAsConsulairePrevAn" id="" class="form-control" placeholder="NbreAsConsulairePrevAn" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreAsConsulairePrevAn</label>
                                <input type="text" name="NbreAsConsulairePrevAn" id="" class="form-control" placeholder="NbreAsConsulairePrevAn" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NbreRencComOrganisation</label>
                                <input type="text" name="NbreRencComOrganisation" id="" class="form-control" placeholder="NbreRencComOrganisation" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreRencComFinan</label>
                                <input type="text" name="NbreRencComFinan" id="" class="form-control" placeholder="NbreRencComFinan" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreRencComFoncierDecen</label>
                                <input type="text" name="NbreRencComFoncierDecen" id="" class="form-control" placeholder="NbreRencComFoncierDecen" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreRencComPromoModerAgri</label>
                                <input type="text" name="NbreRencComPromoModerAgri" id="" class="form-control" placeholder="NbreRencComPromoModerAgri" aria-describedby="helpId">
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
