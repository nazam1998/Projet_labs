@extends('layouts.admin')

@section('title')
Page Service Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition des éléments de Page Service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('servicepage.update',$servicepage)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Titre 1 <small>Pour mettre un mot en vert, veuillez le mettre entre []</small></label>
                @error('titre1')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre1" value="{{old('titre1',$servicepage->titre1)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter first Title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre 2</label>
                @error('titre2')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre2" value="{{old('titre2',$servicepage->titre2)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter second Title">
            </div>
            

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
