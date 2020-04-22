@extends('layouts.admin')

@section('title')
    Testimonial Table
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Testimonial Table</h3>
    <h3 class="card-title mx-5"><a class="btn btn-primary" href="{{route('testimonial.create')}}">Ajouter Testimonial</a></h3>
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
                    <th>Fonction</th>
                    <th>Texte</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->prenom}}</td>
                    <td>{{$item->fonction}}</td>
                    <td>{{$item->texte}}</td>
                <td>
                    <a href="{{route('testimonial.edit',$item)}}" class="btn btn-warning my-2">Editer</a>
                <a href="{{route('testimonial.destroy',$item)}}" class="btn btn-danger">Supprimer</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
