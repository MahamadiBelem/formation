@extends('layout.templateformation')
<div style="background: #E8EAC8"> 
@section('content')

<div>
    <p>{{ $counter }}</p>
    <div class="form-group">
    <input type="number" class="form-control" wire:model="size">
    </div>
    <button wire:click="increment" class="btn btn-info"> + </button>  <button wire:click="decrement" class="btn btn-info"> - </button>
</div>
<br>
<br>

<div class="row">
<div class="card border-primary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #A7255E; color:white;">Structures de formation</div>
  <div class="card-body text-primary">
    <h5 class="card-title"><p>{{ $counter }}</p></h5>
    <p class="card-text">Structures de formation.</p>
  </div>
</div>

<div class="card border-secondary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #1C73DB; color:white;">Apprenants </div>
  <div class="card-body text-secondary">
    <h5 class="card-title">13</h5>
    <p class="card-text">Apprenants</p>
  </div>
</div>

</div>

<div class="row">
<div class="card border-primary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #1C73DB; color:white;">Structures de formation</div>
  <div class="card-body text-primary">
    <h5 class="card-title">22</h5>
    <p class="card-text">Structures de formation.</p>
  </div>
</div>

<div class="card border-secondary mb-3" style="width: 18rem;">
  <div class="card-header" style="background-color: #A7255E; color:white;">Apprenants </div>
  <div class="card-body text-secondary">
    <h5 class="card-title">13</h5>
    <p class="card-text">Apprenants</p>
  </div>
</div>
</div>


@endsection