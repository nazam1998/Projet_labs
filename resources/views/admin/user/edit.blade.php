@extends('layouts.admin')

@section('title')
Editer User
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Editer User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('user.update',$user)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="description">Description</label>
                @error('description')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea type="text" class="form-control" id="description"
                    name="description">{{old('description',$user->description)}}</textarea>
            </div>

            <div class="form-group">
                <label>Rôle</label>
                @error('role_id')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <select name="role_id" id="">
                    @foreach ($roles as $item)
                <option value="{{$item->id}}">{{$item->role}}</option>
                    @endforeach
                </select>
            </div>


            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection
