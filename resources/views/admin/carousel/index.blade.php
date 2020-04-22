@extends('layouts.admin')

@section('title')
Back Office Carousel
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Carousel Table</h3>
    <h3 class="card-title"><a class="btn btn-primary ml-5" href="{{route('carousel.create')}}">Ajouter Carousel</a></h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Image </td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousels as $item)
                    <tr>
                    <td><img src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>
                        <a href="{{route('carousel.edit',$item)}}" class="btn btn-warning">Editer</a>
                        <form action="{{route('carousel.destroy',$item)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger my-3">Supprimer</button>
                        </form>
                    </td>
                    
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
