@extends('layouts.admin')

@section('title')
Ajouter Service
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter Service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                @error('titre')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            <input type="text" name="titre" class="form-control" id="titre" value="{{old('titre')}}" placeholder="Enter a Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                @error('description')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            <textarea type="text" name="description" class="form-control" id="description">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label>Logo</label>
                @error('categorie')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="row">
                    @foreach ($icones as $item)
                    <div class="form-check col-3">
                    <input class="form-check-input" type="radio" name="logo" value="{{$item['class']}}">
                    <label class="form-check-label"><i class="{{$item['class']}} fa-2x"></i></label>
                      </div>
                    @endforeach
                </div>
              </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection
