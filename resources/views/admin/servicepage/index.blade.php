@extends('layouts.admin')

@section('title')
Back Office Page Service
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Page Service Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Titre1</td>
                    <td>Titre2</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicepage as $item)

                <tr>
                    <td>{{$item->titre1}}</td>
                    <td>{{$item->titre2}}</td>
                    <td> <a href="{{route('servicepage.edit',$item)}}" class="btn btn-warning">Edit</a> </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
