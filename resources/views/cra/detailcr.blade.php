@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">

        <div class="modal-content">
            <div class="modal-header coopvert">
                <h5 class="modal-title" id="exampleModalLabel">Détails de la chambre régionale : {{$cr->libelleCRA}}</h5>
                
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for=""><strong>Libellé de la CRA</strong></label>
                            <span>: {{$cr->libelleCRA}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Telephone</label>
                            <span>: {{$cr->telephone}}</span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">E-mail </label>
                            <span>: {{$cr->email}}</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Boite postale</label>
                            <span>: {{$cr->boitepostal}}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <span>: {{$cr->gpslatitude}}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <span>: {{$cr->gpslongitude}}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Site web</label>
                            <span>: {{$cr->siteWeb}}</span>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="communes">Commune</label>
                            <span>:{{$cr->commune->libelleCommune}}</span>

                        </div>
                    </div>

                <div class="row">
                    <div class="col-6">
                        <a href="{{url('/chambreRegionale')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



@endsection
