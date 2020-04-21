@extends('layouts.admin')

@section('title')
Back Office Contact
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Contact Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Sous Titre</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Numéro</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                
                <tr>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->texte}}</td>
                    <td>{{$item->sous_titre}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->ville}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->email}}</td>
                        <td>
                            <a href="{{route('contact.edit',$item)}}" class="card-title btn btn-warning ml-5">Edit</a>
                        </td>

                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
