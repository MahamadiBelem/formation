@extends('layout.templatecooperative')

@section('content')
<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <form action="{{url('/save-update-association/'.$association->id)}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier une association</h5>
                    
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Dénomination</label>
                                <input type="text" value="{{$association->denomination}}" name="denomination" id="" class="form-control" placeholder="Dénomination" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">N° Recepissé</label>
                                <input type="text" value="{{$association->nroRecepisse}}" name="nroRecepisse" id="" class="form-control" placeholder="Récepissé" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date de création</label>
                                <input type="date" value="{{$association->dateCreation}}" name="dateCreation" id="" class="form-control" placeholder="la date de création" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="text" value="{{$association->telephone}}" name="telephone" id="" class="form-control" placeholder="+226 25..." aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" value="{{$association->email}}" name="email" id="" class="form-control" placeholder="associa@gmail.com" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">latitude(GPS)</label>
                                <input type="text" value="{{$association->coordonnegpslat}}" name="coordonnegpslat" id="" class="form-control" placeholder="latitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">longitude(GPS)</label>
                                <input type="text" value="{{$association->coordonnegpslong}}" name="coordonnegpslong" id="" class="form-control" placeholder="longitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Site web </label>
                                <input type="text" value="{{$association->siteWeb}}" name="siteWeb" id="" class="form-control" placeholder="www.address.com" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">couverture Fonctionnelle</label>
                                <input type="text" value="{{$association->couvertureFonctionnelle}}" name="couvertureFonctionnelle" id="" class="form-control" placeholder="..." aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Genre</label>
                                <input type="text" value="{{$association->genre}}" name="genre" id="" class="form-control" placeholder="Agricole, pastoral..." aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre d'hommes </label>
                                <input type="text" value="{{$association->nbreMembreH}}" name="nbreMembreH" id="" class="form-control" placeholder=" 50" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de femmes </label>
                                <input type="text" value="{{$association->nbreMembreF}}" name="nbreMembreF" id="" class="form-control" placeholder="50" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre d'unions</label>
                                <input type="text" value="{{$association->nbreUnion}}" name="nbreUnion" id="" class="form-control" placeholder="10" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="typeorganisations">type organisation</label>
                                <select id="typeorganisations" class="form-control" name="type_organisation_id">
                                    @foreach ($typeorganisations as $typeorganisation)
                                    <option value="{{$typeorganisation->id}}">{{$typeorganisation->libelletypeorganisation}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="communes">Commune</label>
                                <select id="communes" class="form-control" name="commune_id">
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
                                <label for="activiteorganes">Activités Organes</label>
                                <select id="activiteorganes" class="form-control" name="activiteorgane_id">
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
            </div>
        </form>


    </div>
</div>



@endsection
