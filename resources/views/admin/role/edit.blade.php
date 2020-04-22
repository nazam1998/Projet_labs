@extends('layouts.admin')

@section('title')
Rôle Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition de la Rôle</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('role.update',$role)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Rôle</label>
                @error('role')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="role" value="{{old('role',$role->role)}}" class="form-control" id="exampleInputEmail1">
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
