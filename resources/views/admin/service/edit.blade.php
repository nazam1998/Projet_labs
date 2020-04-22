@extends('layouts.admin')

@section('title')
Editer Service
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Editer Service</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('service.update',$service)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                @error('titre')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre" class="form-control" id="titre"
                    value="{{old('titre',$service->titre)}}">
            </div>
            <div class="form-group">
                <label for="titre">Color</label>
                @error('color')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            <input type="color" name="color" class="form-control" id="color" value="{{old('color',$service->color)}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                @error('description')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea type="text" name="texte" class="form-control" id="description"
                    name="texte">{{old('titre',$service->titre)}}</textarea>
            </div>
            <div class="form-group">
                <label>Logo</label>
                @error('categorie')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="row">
                    @foreach ($icones as $item)
                    <div class="form-check col-3">
                        <input class="form-check-input"  type="radio"
                        name="logo" value="{{$item['class']}}" @if($item['class']==$service->logo) checked @endif>
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
