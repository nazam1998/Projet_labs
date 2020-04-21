@extends('layouts.admin')

@section('title')
Back Office Footer
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Footer Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Texte </td>
                    <td>Lien </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($footer as $item)

            <tr>
                <td>{{$item->texte}}</td>
                <td><a href="{{$item->lien}}">{{$item->lien}}</a></td>
                <td>
                <a href="{{route('footer.edit',$item)}}" class="btn btn-warning ml-5">Editer</a>
                </td>
            </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
