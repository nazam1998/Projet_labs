@extends('layouts.admin')

@section('title')
Back Office Formulaire
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Formulaire Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Sujet</th>
                    <th>Texte</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $item)
                
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->msg}}</td>
                    

                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
