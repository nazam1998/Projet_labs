@extends('layouts.admin')

@section('title')
Tag Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition de la Tag</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('tag.update',$tag)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tag</label>
                @error('tag')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="tag" value="{{old('tag',$tag->tag)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="My Tag">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
