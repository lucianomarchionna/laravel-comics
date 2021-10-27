@extends('layouts.app')

@section('title', 'LARAVEL COMICS')

@section('content')
    <h1>SONO IL MAIN DELLA HOME</h1>
@endsection

@section('content2')
    @foreach ($comics as $comic)
        {{ $comic['series'] }}
        <br/>
    @endforeach
@endsection