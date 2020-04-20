@extends('layouts.app')

@section('content')
    @include('components.nav')
    @include('components.service-header')
    @include('components.service-service')
    @include('partials.service-feature')
    @include('components.service-card')
    @include('components.newsletter')
    @include('partials.contact')
@endsection