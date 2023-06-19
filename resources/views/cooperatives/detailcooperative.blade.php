@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <div class="modal-content">
            <div class="modal-header coopvert">
                <h5 class="modal-title" id="exampleModalLabel">details de la cooperative : {{$cooperative->denomination}}</h5>

            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for=""><strong>Denomination</strong></label>
                            <span>: {{$cooperative->denomination}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Immatriculation</label>
                            <span>: {{$cooperative->noImmatriculation}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Date de creation</label>
                            <span>: {{$cooperative->dateCreation}}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Telephone</label>
                            <span>: {{$cooperative->telephone}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">l'email </label>
                            <span>: {{$cooperative->email}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Boite postal</label>
                            <span>: {{$cooperative->boitepostal}}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <span>: {{$cooperative->coordonnegpslat}}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <span>: {{$cooperative->coordonnegpslong}}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Site web</label>
                            <span>: {{$cooperative->siteWeb}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nom de la Faitiere d'Affliation</label>
                            <span>:{{$cooperative->nomFaitiereAffliation}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Montant du Capital</label>
                            <span>: {{$cooperative->montantCapital}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Mombre de Membre Homme</label>
                            <span>:{{$cooperative->noMembreHomme}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Mombre de Membre Femme</label>
                            <span>: {{$cooperative->noMenbreFemme}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Limitation du Nombre de Mandat</label>
                            <span>:{{$cooperative->limitationNombreMandat}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Duree du Mandat Organe Gestion</label>
                            <span>: {{$cooperative->dureeMandatOrganeGestion}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Duree du Mandat Organe control</label>
                            <span>:{{$cooperative->dureeMandatOrganecontrol}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="communes">Commune</label>
                            <span>:{{$cooperative->commune->libelleCommune}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="formejuridique">forme juridique</label>
                            <span>:{{$cooperative->forme_juridique->libelleformejuridique}}</span>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="typeorganisation">type organisation</label>
                            <span>:{{$cooperative->type_organisation->libelletypeorganisation}}</span>


                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="genre">genre:</label>
                            <span>:{{$cooperative->genre->libellegenre}}</span>


                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <a href="{{url('/cooperative')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



@endsection
