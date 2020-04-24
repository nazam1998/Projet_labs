@extends('layouts.admin')

@section('title')
Catégorie Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition de la Catégorie</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('categorie.update',$categorie)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Catégorie</label>
                @error('categorie')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="categorie" value="{{old('categorie',$categorie->categorie)}}" class="form-control" id="exampleInputEmail1">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
