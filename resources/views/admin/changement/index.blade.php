@extends('layouts.admin')

@section('title')
    User Request
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User Request Table</h3>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($changements as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->prenom}}</td>
                    <td>{{$item->description}}</td>
                <td>
                <form action="{{route('updateChangement',$item)}}" method="post">
                     @csrf
                     <button type="submit" class="btn btn-success">Valider</button>
                </form>
                    <a href="{{route('deleteChangement',$item)}}" class="btn btn-danger my-2">Décliner</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
