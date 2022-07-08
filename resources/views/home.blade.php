@extends('layouts.base')

@section('page-title')
    DC Comics
@endsection

@section('page-content')
    @include('main-sections.hero')
    @include('main-sections.comics')
    @include('main-sections.navigation')
@endsection