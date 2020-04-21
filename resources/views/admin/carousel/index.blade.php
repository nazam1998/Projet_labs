@extends('layouts.admin')

@section('title')
Back Office Carousel
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Carousel Table</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Image </td>
                    <td>Actione</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousels as $item)
                    <tr>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td><a href="{{route('carousel.edit',$item)}}" class="btn btn-warning">Editer</a></td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
