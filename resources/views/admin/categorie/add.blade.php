@extends('layouts.admin')

@section('title')
Catégorie Ajout
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter Catégorie</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('categorie.store')}}" method="POST">
    @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Catégorie</label>
                @error('categorie')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="categorie" value="{{old('categorie')}}" class="form-control" id="exampleInputEmail1">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
