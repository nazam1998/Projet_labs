@extends('layouts.admin')

@section('title')
Contact Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition des éléments de contact</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('contact.update',$contact)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                @error('titre')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre" value="{{old('titre',$contact->titre)}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Texte</label>
                @error('texte')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea name="texte" class="form-control" id="exampleInputEmail1">{{old('texte',$contact->texte)}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sous Titre</label>
                @error('sous_titre')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="sous_titre" value="{{old('sous_titre',$contact->sous_titre)}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse</label>
                @error('adresse')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="adresse" value="{{old('adresse',$contact->adresse)}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ville</label>
                @error('ville')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="ville" value="{{old('ville',$contact->ville)}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Numéro</label>
                @error('numero')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="numero" value="{{old('numero',$contact->numero)}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                @error('email')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="email" name="email" value="{{old('email',$contact->email)}}" class="form-control" id="exampleInputEmail1">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
