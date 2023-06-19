@extends('layout.templatecooperative')

@section('content')
<div class="row" style="margin-top: 5%;margin-left: -50%">
    <div class="card-body">
        <form action="{{url('/save-update-cr/'.$cr->id)}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header coopvert">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier une Chambre régionale</h5>
                    
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Libellé de la CRA</label>
                                <input type="text" value="{{$cr->libelleCRA}}" name="libelleCRA" id="" class="form-control" placeholder="Libellé de la Chambre régionale" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">*obligatoire</span></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telephone</label>
                                <input type="text" value="{{$cr->telephone}}" name="telephone" id="" class="form-control" placeholder="Telephone" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">E-Mail</label>
                                <input type="text" value="{{$cr->email}}" name="email" id="" class="form-control" placeholder="E-Mail" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Boite postale</label>
                                <input type="text" value="{{$cr->boitepostal}}" name="boitepostal" id="" class="form-control" placeholder="Boite postale" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red"></span></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">latitude(GPS)</label>
                                <input type="text" value="{{$cr->gpslatitude}}" name="gpslatitude" id="" class="form-control" placeholder="Latitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">longitude(GPS)</label>
                                <input type="text" value="{{$cr->gpslongitude}}" name="gpslongitude" id="" class="form-control" placeholder="Longitude" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"><span style="color: red">format decimal</span></small>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Site web </label>
                                <input type="text" value="{{$cr->siteWeb}}" name="siteWeb" id="" class="form-control" placeholder=" Site Web" aria-describedby="helpId">
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
            </div>
        </form>


    </div>
</div>



@endsection
