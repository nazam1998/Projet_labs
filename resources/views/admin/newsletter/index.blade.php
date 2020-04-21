@extends('layouts.admin')

@section('title')
Back Office Newsletter
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Newsletter Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Liste des Inscrits</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)

            <tr>
                <td>{{$item->email}}</td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
