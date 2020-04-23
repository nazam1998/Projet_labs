@extends('layouts.admin')

@section('title')
    Profile
@endsection

@section('content')
@if (session()->has('msg'))
<p class="alert alert-success">{{session('msg')}}</p>
@endif
<form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group mb-3">
        <input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom',$user->prenom) }}"
        placeholder="Prenom" autofocus>
        @if ($errors->has('prenom'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('prenom') }}</strong>
        </div>
        @endif
    </div>
    
    <div class="form-group mb-3">
        <input type="text" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom',$user->nom) }}"
        placeholder="Nom" autofocus>
        @if ($errors->has('nom'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('nom') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group mb-3">
        <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" autofocus>{{ old('description',$user->description) }}</textarea>
        @if ($errors->has('description'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('description') }}</strong>
        </div>
        @endif
    </div>
    <div class="form-group mb-3">
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email',$user->email) }}"
    placeholder="{{ __('adminlte::adminlte.email') }}">
    @if ($errors->has('email'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleInputFile">Image</label>
    <div class="form-group">
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
<div class="form-group mb-3">
<input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
    @if ($errors->has('password'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
    </div>
    @endif
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection