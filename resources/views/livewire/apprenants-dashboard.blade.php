@extends('layout.templateformation')
<div style="background: #E8EAC8; font-family: Times New Roman"> 
@section('content')

<!--div>
    <p>{{ $counter }}</p>
    <div class="form-group">
    <input type="number" class="form-control" wire:model="size">
    </div>
    <button wire:click="increment" class="btn btn-info"> + </button>  <button wire:click="decrement" class="btn btn-info"> - </button>
</div-->
<br>
<br>

<div  style="font-family: Times New Roman;font-weight: bold" class="row">
<div class="card border-primary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #007bff;color:white;">Regimes </div>
  <div class="card-body text-primary">
    <h5 class="card-title"><p>{{ $totalregime }}</p></h5>
    <p class="card-text">Regimes</p>
  </div>
</div>

<div class="card border-secondary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #1C73DB; color:white;">Durée </div>
  <div class="card-body text-secondary">
    <h5 class="card-title">{{$duree}}</h5>
    <p class="card-text">Durée</p>
  </div>
</div>

</div>

<div class="row">
<div class="card border-primary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #1C73DB; color:white;">Nombre de kits</div>
  <div class="card-body text-primary">
    <h5 class="card-title">{{$totalkits}}</h5>
    <p class="card-text">Nombre de kits.</p>
  </div>
</div>

<div class="card border-secondary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #007bff;color:white;">Specialités </div>
  <div class="card-body text-secondary">
    <h5 class="card-title">{{$totalspecialite}}</h5>
    <p class="card-text">Specialités</p>
  </div>
</div>
</div>


@endsection