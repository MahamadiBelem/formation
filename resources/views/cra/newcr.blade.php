@extends('layout.templatecooperative')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <form action="{{url('/save-cr')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une chambre régionale</h5>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Libelle de la Chambre Régionale</label>
                                <input type="text" name="libelleCRA" id="" class="form-control" placeholder="Libellé de la Chambre régionale" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telephone</label>
                                <input type="text" name="telephone" id="" class="form-control" placeholder="Telephone" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">E-mail </label>
                                <input type="text" name="email" id="" class="form-control" placeholder="E-mail" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Boite postale</label>
                                <input type="text" name="boitepostal" id="" class="form-control" placeholder="Boite postale" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Position GPS : Latitude</label>
                                <input type="text" name="gpslatitude" id="" class="form-control" placeholder="Latitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Position GPS : Longitude</label>
                                <input type="text" name="gpslongitude" id="" class="form-control" placeholder="Longitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Site web </label>
                                <input type="text" name="siteWeb" id="" class="form-control" placeholder="Site Web de la chambre régionale" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
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

                </div>
                <div class="modal-footer">
                    <a href="{{url('/chambreRegionale')}}" class="btn btn-warning" data-dismiss="modal">Quitter <i class="fa fa-arrows" aria-hidden="true"></i></a>
                    <button type="submit" class="btn btn-primary">Sauvegarder <i class="fa fa-save" aria-hidden="true"></i></button>
                </div>

        </form>


    </div>
</div>



@endsection
