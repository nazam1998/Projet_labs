@extends('layouts.admin')

@section('title')
Back Office Accueil
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Accueil Table</h3>
    <a href="{{route('accueil.edit',$edit)}}" class="card-title btn btn-warning ml-5">Edit</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Section </td>
                    <td>Contenu</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($accueils as $item)

                <tr>
                    <td>Logo </td>
                    <td><img src="{{asset('storage/'.$item->logo)}}" alt=""></td>
                </tr>
                <tr>
                    <td>Titre Carousel</td>
                    <td>{{$item->titre_carousel}}</td>
                </tr>
                <tr>
                    <td>Titre About</td>
                    <td>{{$item->titre_about}}</td>
                </tr>
                <tr>
                    <td>Texte 1 About </td>
                    <td>{{$item->text1_about}}</td>
                </tr>
                <tr>
                    <td>Texte 2 About </td>
                    <td>{{$item->text2_about}}</td>
                </tr>
                <tr>
                    <td>Etat du Bouton </td>
                    <td>{{$item->showbutton?'Afficher':'Caché'}}</td>
                </tr>
                <tr>
                    <td>Titre Service</td>
                    <td>{{$item->titre_service}}</td>
                </tr>
                <tr>
                    <td>Vidéo </td>
                    <td><a href="{{$item->video}}">{{$item->video}}</a></td>
                </tr>
                <tr>
                    <td>Image Vidéo</td>
                    <td><img src="{{asset('storage/'.$item->image_video)}}" alt=""></td>
                </tr>
                <tr>
                    <td>Titre Testimonials </td>
                    <td>{{$item->titre_testimonials}}</td>
                </tr>
                <tr>
                    <td>Titre Team</td>
                    <td>{{$item->titre_team}}</td>
                </tr>
                <tr>
                    <td>Titre Promotion</td>
                    <td>{{$item->titre_promotion}}</td>
                </tr>
                <tr>
                    <td>Texte Promotion</td>
                    <td>{{$item->text_promotion}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
