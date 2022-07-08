@extends('layouts.base')

@section('page-title')
    {{$singleComic['title']}}
@endsection

@section('page-content')
    @include('main-sections.hero')
    @include('main-sections.comicLabel')
    @include('main-sections.comicInformation')
@endsection