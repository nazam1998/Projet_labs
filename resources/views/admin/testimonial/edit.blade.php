@extends('layouts.admin')

@section('title')
Editer Testimonial
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Editer Testimonial</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('testimonial.update',$testimonial)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="nom">Nom</label>
                @error('nom')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="nom" class="form-control" id="nom" value="{{old('nom',$testimonial->nom)}}" placeholder="Enter a Name">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                @error('prenom')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{old('prenom',$testimonial->prenom)}}" placeholder="Enter a Surname">
            </div>
            <div class="form-group">
                <label for="fonction">Fonction</label>
                @error('fonction')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="fonction" class="form-control" id="fonction" value="{{old('fonction',$testimonial->fonction)}}" placeholder="Enter a Function">
            </div>
            <div class="form-group">
                <label for="titre">Texte</label>
                @error('titre')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea type="text" name="texte" class="form-control" id="titre" name="texte">{{old('texte',$testimonial->texte)}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                @error('image')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection
