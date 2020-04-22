@extends('layouts.admin')

@section('title')
Back Office Commentaire
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Commentaire Table</h3>
    <a href="{{route('categorie.create')}}" class="card-title btn btn-primary ml-5">Ajouter Commentaire</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Commentaires</td>
                    <td>Article</td>
                    <td>User</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $item)

            <tr>
                <td>{{$item->comment}}</td>
                <td>{{$item->article->titre}}</td>
                <td>{{$item->user->nom.' '.$item->user->prenom}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
