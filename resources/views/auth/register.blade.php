@extends('layout.template')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
    <form action="{{url('/register-user')}}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header modal-header-designed">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="row">
            <div class="col-6">
                
        <div class="form-group ">
            

            <div class="col-md-12">
                <label for="name" class="col-md-12 col-form-label text-md-left">Nom & prenom</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            </div>

            <div class="col-6">
                <div class="form-group ">
                    <label for="email" class="col-md-12 col-form-label text-md-left">Email</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group ">
                    <label for="password" class="col-md-12 col-form-label text-md-left">Mot  passe</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-6">

            <div class="form-group ">
                <label for="password-confirm" class="col-md-12 col-form-label text-md-left">Confirmer le mot de passe</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <div class="form-group ">
                    <label for="password-confirm" class="col-md-12 col-form-label text-md-left">Droits</label>

                    <div class="col-md-12">
                        <select name="roles" id="roles" class="form-control" required>
                            @foreach ($roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-left: 2%; ">
            <div class="col-12">  
        <div class="form-group row mb-0">
            <div class="col-md-6" >
                <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>    Enregister
                </button>

                <a  class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i>    Annuler
                    </a>
            </div>
            <div class="col-md-6" >
               
            </div>
            <br><br>
        </div>
            </div>
            
            <br><br>
        </div>
  </form>
  
  
</div>
</div>



@endsection