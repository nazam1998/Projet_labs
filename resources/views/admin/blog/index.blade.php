@extends('layouts.admin')

@section('title')
Back Office Blog
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Blog Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Quote</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $item)

                <tr>
                    <td>{{$item->quote}}</td>
                    <td> <a href="{{route('blog.edit',$item)}}" class="btn btn-warning">Edit</a> </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
