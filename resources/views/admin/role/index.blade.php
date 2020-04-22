@extends('layouts.admin')

@section('title')
Back Office Rôle
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Rôle Table</h3>
    <a href="{{route('role.create')}}" class="card-title btn btn-primary ml-5">Ajouter Rôle</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Rôle </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $item)

            <tr>
                <td>{{$item->role}}</td>
                
                <td>
                    @if ($item->id>4)
                    <a href="{{route('role.edit',$item)}}" class="btn btn-warning ml-5">Editer</a>
                    <a href="{{route('role.destroy',$item)}}" class="btn btn-danger">Supprimer</a>
                    @endif
                </td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
