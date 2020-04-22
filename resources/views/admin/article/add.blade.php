@extends('layouts.admin')

@section('title')
Ajouter Article
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="titre">Texte</label>
                @error('titre')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea type="text" name="texte" class="form-control" id="titre" name="texte">{{old('texte')}}</textarea>
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
            <div class="form-group">
                <label>Catégorie</label>
                @error('categorie')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <select class="form-control" name="categorie">
                    @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->categorie}}</option>
                    @endforeach
                </select>
              </div>
            <div class="row">
                @foreach ($tags as $item)
                <div class="form-check col-3">
                    @error('tag')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                    <input type="checkbox" value="{{$item->id}}" class="form-check-input" id="exampleCheck1" name="tag[]">
                    <label class="form-check-label" for="exampleCheck1">{{$item->tag}}</label>
                </div>
                @endforeach
            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection
