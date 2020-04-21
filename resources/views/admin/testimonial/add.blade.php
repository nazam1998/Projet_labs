@extends('layouts.admin')

@section('title')
Ajouter Testimonial
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter Testimonial</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nom">Nom</label>
                @error('nom')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="nom" class="form-control" id="nom" value="{{old('nom')}}" placeholder="Enter a Title">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                @error('prenom')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{old('prenom')}}" placeholder="Enter a Title">
            </div>
            <div class="form-group">
                <label for="fonction">Fonction</label>
                @error('fonction')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="fonction" class="form-control" id="fonction" value="{{old('fonction')}}" placeholder="Enter a Title">
            </div>
            <div class="form-group">
                <label for="texte">Texte</label>
                @error('texte')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            <textarea type="text" name="texte" class="form-control" id="texte">{{old('texte')}}</textarea>
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
