@extends('layouts.base')

@section('page-title')
    {{$singleComic['title']}}
@endsection

@section('page-content')
    <h1>{{$singleComic['title']}}</h1>
@endsection