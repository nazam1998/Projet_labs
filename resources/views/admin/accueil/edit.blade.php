@extends('layouts.admin')

@section('title')
Accueil Edit
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edition des éléments de l'accueil</h3>
        <h3 class="card-title">Pour mettre un mot en vert dans un titre, veuillez le mettre entre []</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('accueil.update',$accueil)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Titre Carousel</label>
                @error('titre_carousel')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name="titre_carousel" value="{{old('titre_carousel',$accueil->titre_carousel)}}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre About</label>
                @error('titre_about')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
            <input type="text" name='titre_about'class="form-control" id="exampleInputPassword1" value="{{old('titre_about',$accueil->titre_about)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre Service</label>
                @error('titre_service')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name='titre_service'class="form-control" id="exampleInputPassword1" value="{{old('titre_service',$accueil->titre_service)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre Testimonials</label>
                @error('titre_testimonials')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name='titre_testimonials'class="form-control" id="exampleInputPassword1" value="{{old('titre_testimonials',$accueil->titre_testimonials)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre Team</label>
                @error('titre_team')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name='titre_team'class="form-control" id="exampleInputPassword1" value="{{old('titre_team',$accueil->titre_team)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Titre Promotion</label>
                @error('titre_promotion')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name='titre_promotion'class="form-control" id="exampleInputPassword1" value="{{old('titre_promotion',$accueil->titre_promotion)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Texte 1 About</label>
                @error('texte1_about')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea class="form-control" name="text1_about" id="" cols="30" rows="10">{{old('text1_about',$accueil->text1_about)}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Texte 2 About</label>
                @error('texte2_about')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea class="form-control" name="text2_about" id="" cols="30" rows="10">{{old('text2_about',$accueil->text2_about)}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Texte Promotion</label>
                @error('texte_promotion')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <textarea class="form-control" name="text_promotion" id="" cols="30" rows="10">{{old('text_promotion',$accueil->text_promotion)}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Lien Video</label>
                @error('video')
                     <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <input type="text" name='video'class="form-control" id="exampleInputPassword1" value="{{old('video',$accueil->video)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Logo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image Video</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="imageVideo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" @if($accueil->showbutton)checked @endif name='button' class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Button</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
