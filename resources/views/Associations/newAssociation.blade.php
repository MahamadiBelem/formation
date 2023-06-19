@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <form action="{{url('/save-association')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une association</h5>
                    
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Denomination</label>
                                <input type="text" name="denomination" id="" class="form-control" placeholder="Dénomination" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">N° Recepisse</label>
                                <input type="text" name="nroRecepisse" id="" class="form-control" placeholder="Numéro du recepisse" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date de création</label>
                                <input type="date" name="dateCreation" id="" class="form-control" placeholder="Date de création" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="text" name="telephone" id="" class="form-control" placeholder="Telephone" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"> </span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">l'email </label>
                                <input type="text" name="email" id="" class="form-control" placeholder="email" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Durée de vie</label>
                                <input type="text" name="dureeVie" id="" class="form-control" placeholder="dureeVie" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                    <div class="col-6">
                            <div class="form-group">
                                <label for="">longitude(GPS)</label>
                                <input type="text" name="coordonnegpslong" id="" class="form-control" placeholder="longitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">latitude(GPS)</label>
                                <input type="text" name="coordonnegpslat" id="" class="form-control" placeholder="latitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Site web </label>
                                <input type="text" name="siteWeb" id="" class="form-control" placeholder=" le site Web" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">couverture Fonctionnelle</label>
                                <input type="text" name="couvertureFonctionnelle" id="" class="form-control" placeholder="Couverture Fonctionnelle" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Genre</label>
                                <input type="text" name="genre" id="" class="form-control" placeholder="Genre" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de Membre Hommes </label>
                                <input type="text" name="nbreMembreH" id="" class="form-control" placeholder=" nombre de Membre Homme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de Membre Femmes </label>
                                <input type="text" name="nbreMembreF" id="" class="form-control" placeholder="nombre de Membre Femmes" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre d'union</label>
                                <input type="text" name="nbreUnion" id="" class="form-control" placeholder="Nombre d'union" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">type organisation</label>
                                <select id="" class="form-control" name="type_organisation_id">
                                    @foreach ($typeorganisations as $typeorganisation)
                                    <option value="{{$typeorganisation->id}}">{{$typeorganisation->libelletypeorganisation}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Commune</label>
                                <select id="" class="form-control" name="commune_id">
                                    @foreach ($communes as $commune)
                                    <option value="{{$commune->id}}">{{$commune->libelleCommune}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Activités Organes</label>
                                <select id="" class="form-control" name="activiteorgane_id">
                                    @foreach ($activiteorganes as $activiteorgane)
                                    <option value="{{$activiteorgane->id}}">{{$activiteorgane->activitePrincipale}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>








                </div>
                <div class="modal-footer">
                    <a href="{{url('/association')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
                    <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                </div>

        </form>


    </div>
</div>



@endsection
