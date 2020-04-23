@extends('layouts.admin')

@section('title')
Back Office Tag
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tag Table</h3>
    <a href="{{route('tag.create')}}" class="card-title btn btn-primary ml-5">Ajouter Tag</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Tag </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $item)

            <tr>
                <td>{{$item->tag}}</td>
                <td class="text-center">
                <a href="{{route('tag.edit',$item)}}" class="btn btn-warning my-2">Editer</a>
                <form action="{{route('tag.destroy',$item)}}" method="POST">
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
