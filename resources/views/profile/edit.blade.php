@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
@include('components.nav')
<form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="input-group mb-3">
        <input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}"
               placeholder="Prenom" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>

        @if ($errors->has('prenom'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('prenom') }}</strong>
            </div>
        @endif
    </div>

    <div class="input-group mb-3">
        <input type="text" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom') }}"
               placeholder="Nom" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>

        @if ($errors->has('nom'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('nom') }}</strong>
            </div>
        @endif
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
               placeholder="{{ __('adminlte::adminlte.email') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
        @if ($errors->has('image'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('image') }}</strong>
            </div>
        @endif
      </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
               placeholder="{{ __('adminlte::adminlte.password') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('components.nav')
@endsection