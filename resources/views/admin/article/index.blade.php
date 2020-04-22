@extends('layouts.admin')

@section('title')
    Article Table
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Article Table</h3>
    <h3 class="card-title mx-5"><a class="btn btn-primary" href="{{route('article.create')}}">Ajouter Article</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Catégorie</th>
                    <th>Tags</th>
                    <th>Auteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->texte}}</td>
                    <td>{{$item->categorie->categorie}}</td>
                    <td>
                        @foreach ($item->tags as $tag)
                        {{$tag->tag}},
                        @endforeach
                    </td>
                    <td>{{$item->user->nom.' '.$item->user->prenom}}</td>
                <td>
                    @if (!$item->valide)
                    <a class="btn btn-success" href="{{route('article.show',$item)}}">Valider</a>
                    @endif
                    <a href="{{route('article.edit',$item)}}" class="btn btn-warning my-2">Editer</a>
                <form action="{{route('article.destroy',$item)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
