@extends('layouts.home')

@section('title', 'Inicio')

@section('content')

    @if(auth()->check())

    @else
    <a href="{{route('login.index')}}">inicia sesión</a>
    @endif

@endsection