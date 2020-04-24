@extends('layouts.admin')

@section('title')
Blog Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition des éléments de Blog</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('blog.update',$blog)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="">Quote</label>
                @error('quote')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="quote" value="{{old('quote',$blog->quote)}}" class="form-control" id="">
            </div>
            

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
