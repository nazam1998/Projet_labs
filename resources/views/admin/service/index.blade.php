@extends('layouts.admin')

@section('title')
    Service Table
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Service Table</h3>
    <h3 class="card-title mx-5"><a class="btn btn-primary" href="{{route('service.create')}}">Ajouter Service</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Logo</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Color</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $item)
                <tr>
                    <td>{{$item->id}}</td>
                <td><i class="{{$item->logo}} fa-2x"></i></td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->description}}</td>
                <td style="background-color: {{$item->color}}"></td>
                <td>
                    <a href="{{route('service.edit',$item)}}" class="btn btn-warning my-2">Editer</a>
                <form action="{{route('service.destroy',$item)}}" method="post">
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
