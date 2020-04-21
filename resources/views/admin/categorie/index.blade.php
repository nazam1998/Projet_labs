@extends('layouts.admin')

@section('title')
Back Office Catégorie
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Catégorie Table</h3>
    <a href="{{route('categorie.create')}}" class="card-title btn btn-primary ml-5">Ajouter Catégorie</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Catégorie </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)

            <tr>
                <td>{{$item->categorie}}</td>
                <td>
                <a href="{{route('categorie.edit',$item)}}" class="btn btn-warning ml-5">Editer</a>
                <a href="{{route('categorie.destroy',$item)}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
