@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <h3>
            <div align=center>Commissions Permanantes</div>
        </h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                        <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/cpexport_csv">CVS</a>
                            <a class="dropdown-item" href="/cpexport_excel">Excel</a>
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
                            <th>NbreMembreComOrganisation</th>
                            <th>NbreComOrganisation</th>
                            <th>NbreMembreComFinantH</th>
                            <th>NbreMembreComFinantF</th>
                            <th>NbreMembreComFoncierDecenH</th>
                            <th>NbreMembreComFoncierDecenF</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cps as $cp)
                        <tr>
                            <td>{{$cp->chambre_regionale->libelleCRA}}</td>
                            <td>{{$cp->NbreMembreComOrganisation}}</td>
                            <td>{{$cp->NbreComOrganisation}}</td>
                            <td>{{$cp->NbreMembreComFinantH}}</td>
                            <td>{{$cp->NbreMembreComFinantF}}</td>
                            <td>{{$cp->NbreMembreComFoncierDecenH}}</td>
                            <td>{{$cp->NbreMembreComFoncierDecenF}}</td>

                            <td>
                                <button data-toggle="modal" data-target="{{'#modifier'.$cp->id}}" class="btn btn-outline-success"><i style="color: #007bff" class="fa fa-edit"></i></button>
                                <button data-toggle="modal" data-target="{{'#suprimer'.$cp->id}}" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>

                                <div class="modal fade" id="{{'modifier'.$cp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{url('/update-cp/'.$cp->id)}}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header coopvert">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier Commission Permanante</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input hidden name="id" value="{{$cp->id}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComOrganisation</label>
                                                                <input type="text" value="{{$cp->NbreMembreComOrganisation}}" name="NbreMembreComOrganisation" id="" class="form-control" placeholder="NbreMembreComOrganisation" aria-describedby="helpId" required>
                                                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="">NbreComOrganisation</label>
                                                                <input type="text" value="{{$cp->NbreComOrganisation}}" name="NbreComOrganisation" id="" class="form-control" placeholder="NbreComOrganisation" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComFinantH</label>
                                                                <input type="text" value="{{$cp->NbreMembreComFinantH}}" name="NbreMembreComFinantH" id="" class="form-control" placeholder="NbreMembreComFinantH" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComFinantF</label>
                                                                <input type="text" value="{{$cp->NbreMembreComFinantF}}" name="NbreMembreComFinantF" id="" class="form-control" placeholder="NbreMembreComFinantF" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComFoncierDecenH</label>
                                                                <input type="text" value="{{$cp->NbreMembreComFoncierDecenH}}" name="NbreMembreComFoncierDecenH" id="" class="form-control" placeholder="NbreMembreComFoncierDecenH" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComFoncierDecenF</label>
                                                                <input type="text" value="{{$cp->NbreMembreComFoncierDecenF}}" name="NbreMembreComFoncierDecenF" id="" class="form-control" placeholder="NbreMembreComFoncierDecenF" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComPromoModerAgriH</label>
                                                                <input type="text" value="{{$cp->NbreMembreComPromoModerAgriH}}" name="NbreMembreComPromoModerAgriH" id="" class="form-control" placeholder="NbreMembreComPromoModerAgriH" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="">NbreMembreComPromoModerAgriF</label>
                                                                <input type="text" value="{{$cp->NbreMembreComPromoModerAgriF}}" name="NbreMembreComPromoModerAgriF" id="" class="form-control" placeholder="NbreMembreComPromoModerAgriF" aria-describedby="helpId">
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


                                <div class="modal fade" id="{{'suprimer'.$cp->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header coopvert">
                                                <h4 class="modal-title">Supprimer Commission permanante</h4>
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
                                                                    <a href="{{url('/delete-cp/'.$cp->id)}}" class="btn btn-danger">supprimer <i class="fa fa-trash" style="color: white"></i></a>
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
        <form action="{{url('/save-cp')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Commission Permanante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NbreMembreComOrganisation</label>
                                <input type="text" name="NbreMembreComOrganisation" id="" class="form-control" placeholder="NbreMembreComOrganisation" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span>*obligatoire</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreComOrganisation</label>
                                <input type="text" name="NbreComOrganisation" id="" class="form-control" placeholder="NbreComOrganisation" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">NbreMembreComFinantH</label>
                                <input type="text" name="NbreMembreComFinantH" id="" class="form-control" placeholder="NbreMembreComFinantH" aria-describedby="helpId" required>
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreMembreComFinantF</label>
                                <input type="text" name="NbreMembreComFinantF" id="" class="form-control" placeholder="NbreMembreComFinantF" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreMembreComFoncierDecenH</label>
                                <input type="text" name="NbreMembreComFoncierDecenH" id="" class="form-control" placeholder="NbreMembreComFoncierDecenH" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreMembreComFoncierDecenF</label>
                                <input type="text" name="NbreMembreComFoncierDecenF" id="" class="form-control" placeholder="NbreMembreComFoncierDecenF" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreMembreComPromoModerAgriH</label>
                                <input type="text" name="NbreMembreComPromoModerAgriH" id="" class="form-control" placeholder="NbreMembreComPromoModerAgriH" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">NbreMembreComPromoModerAgriF</label>
                                <input type="text" name="NbreMembreComPromoModerAgriF" id="" class="form-control" placeholder="NbreMembreComPromoModerAgriF" aria-describedby="helpId">
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
