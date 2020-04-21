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
                <label for="exampleInputEmail1">Titre 1</label>
                @error('titre1')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre1" value="{{old('titre1',$blog->titre1)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre 2</label>
                @error('servicepage')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="servicepage" value="{{old('servicepage',$blog->servicepage)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter email">
            </div>
            

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
