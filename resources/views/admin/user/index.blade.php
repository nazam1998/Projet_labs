@extends('layouts.admin')

@section('title')
    User Table
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User Table</h3>
        </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->role->role}}</td>
                    <td>{{$item->description}}</td>
                <td>
                    <a href="{{route('user.edit',$item)}}" class="btn btn-warning my-2">Editer</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
