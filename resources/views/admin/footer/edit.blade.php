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
<form role="form" action="{{route('footer.update',$footer)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Texte <small>Pour mettre le lien dans un mot, veuillez le mettre entre []</small></label>
                @error('texte')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="texte" value="{{old('texte',$footer->texte)}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Lien</label>
                @error('lien')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="lien" value="{{old('lien',$footer->lien)}}" class="form-control">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
