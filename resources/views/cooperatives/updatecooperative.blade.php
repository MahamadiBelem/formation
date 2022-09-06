@extends('layout.templatecooperative')

@section('content')
<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <form action="{{url('/save-update-cooperative/'.$cooperative->id)}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier une cooperative</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Denomination</label>
                                <input type="text" value="{{$cooperative->denomination}}" name="denomination" id="" class="form-control" placeholder="denomination" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Immatriculation</label>
                                <input type="text" value="{{$cooperative->noImmatriculation}}" name="noImmatriculation" id="" class="form-control" placeholder="l'imatriculation" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date de creation</label>
                                <input type="date" value="{{$cooperative->dateCreation}}" name="dateCreation" id="" class="form-control" placeholder="la date de creation" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telephone</label>
                                <input type="text" value="{{$cooperative->telephone}}" name="telephone" id="" class="form-control" placeholder="le telephone" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">l'email</label>
                                <input type="text" value="{{$cooperative->email}}" name="email" id="" class="form-control" placeholder="email" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Boite postal</label>
                                <input type="text" value="{{$cooperative->boitepostal}}" name="boite postal" id="" class="form-control" placeholder="boitepostal" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">latitude(GPS)</label>
                                <input type="text" value="{{$cooperative->coordonnegpslat}}" name="coordonnegpslat" id="" class="form-control" placeholder="latitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">longitude(GPS)</label>
                                <input type="text" value="{{$cooperative->coordonnegpslong}}" name="coordonnegpslong" id="" class="form-control" placeholder="longitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Site web </label>
                                <input type="text" value="{{$cooperative->siteWeb}}" name="siteWeb" id="" class="form-control" placeholder=" le site Web" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nom de la Faitiere d'Affliation</label>
                                <input type="text" value="{{$cooperative->nomFaitiereAffliation}}" name="nomFaitiereAffliation" id="" class="form-control" placeholder="nom de la Faitiere d'Affliation" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Montant du Capital</label>
                                <input type="text" value="{{$cooperative->montantCapital}}" name="montantCapital" id="" class="form-control" placeholder="le montant Capital" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de Membre Homme </label>
                                <input type="text" value="{{$cooperative->noMembreHomme}}" name="noMembreHomme" id="" class="form-control" placeholder=" nombre de Membre Homme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nombre de Menbre Femme </label>
                                <input type="text" value="{{$cooperative->noMenbreFemme}}" name="noMenbreFemme" id="" class="form-control" placeholder="nombre de Menbre Femme" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Limitation du Nombre de Mandat</label>
                                <input type="text" value="{{$cooperative->limitationNombreMandat}}" name="limitation du  Nombre de Mandat" id="" class="form-control" placeholder="limitation du Nombre de Mandat" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Duree du Mandat Organe Gestion</label>
                                <input type="text" value="{{$cooperative->dureeMandatOrganeGestion}}" name="dureeMandatOrganeGestion" id="" class="form-control" placeholder="duree du Mandat Organe Gestion" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Duree du Mandat Organe control</label>
                                <input type="text" value="{{$cooperative->dureeMandatOrganecontrol}}" name="dureeMandatOrganecontrol" id="" class="form-control" placeholder="duree du Mandat Organe control" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="communes">Commune</label>
                                <select id="communes" class="form-control" name="commune_id">
                                    @foreach ($communes as $commune)
                                    <option @if ($cooperative->commune->id==$commune->id)
                                        selected
                                        @endif value="{{$commune->id}}">{{$commune->libelleCommune}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formejuridiques">forme juridique</label>
                                <select id="formejuridiques" class="form-control" name="forme_juridique_id">
                                    @foreach ($formejuridiques as $formejuridique)
                                    <option @if ($cooperative->forme_juridique->id==$formejuridique->id)
                                        selected
                                        @endif value="{{$formejuridique->id}}">{{$formejuridique->libelleformejuridique}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="typeorganisations">type organisation</label>
                                <select id="typeorganisations" class="form-control" name="type_organisation_id">
                                    @foreach ($typeorganisations as $typeorganisation)
                                    <option @if ($cooperative->type_organisation->id==$typeorganisation->id)
                                        selected
                                        @endif value="{{$typeorganisation->id}}">{{$typeorganisation->libelletypeorganisation}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="genres">genre</label>
                                <select id="genres" class="form-control" name="genre_id">
                                    @foreach ($genres as $genre)
                                    <option @if ($cooperative->genre->id==$genre->id)
                                        selected
                                        @endif value="{{$genre->id}}">{{$genre->libellegenre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="{{url('/cooperative')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
                    <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>


    </div>
</div>



@endsection
