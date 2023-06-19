@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <div class="modal-content">
            <div class="modal-header coopvert">
                <h5 class="modal-title" id="exampleModalLabel">Détails de l'association : {{$association->denomination}}</h5>
                
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for=""><strong>Dénomination</strong></label>
                            <span>: {{$association->denomination}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">N° Recepissé</label>
                            <span>: {{$association->nroRecepisse}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Date de création</label>
                            <span>: {{$association->dateCreation}}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <span>: {{$association->telephone}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Email </label>
                            <span>: {{$association->email}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Genre </label>
                            <span>: {{$association->genre}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <span>: {{$association->coordonnegpslong}}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <span>: {{$association->coordonnegpslat}}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Site web</label>
                            <span>: {{$association->siteWeb}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">couverture Fonctionnelle</label>
                            <span>: {{$association->couvertureFonctionnelle}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-6">
                        <div class="form-group">
                            <label for="">Mombre de Membre Homme</label>
                            <span>:{{$association->nbreMembreH}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Mombre de Membre Femme</label>
                            <span>: {{$association->nbreMembreF}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre d'unions</label>
                            <span>: {{$association->nbreUnion}}</span>

                        </div>
                    </div>

                </div>




                <div class="row">
                    <div class="col-6">
                        <a href="{{url('/association')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



@endsection
