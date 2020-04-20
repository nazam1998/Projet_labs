@extends('layouts.app')

@section('content')
    @include('components.nav')
    @include('components.header')
    @include('partials.about')
    @include('partials.testimonials')
    @include('partials.service')
    @include('components.team')
    @include('components.promotion')
    @include('partials.contact')
@endsection