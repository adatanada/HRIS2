@extends('template')
@section('layout')
    @include('components.navbar')
    @include('components.sidebar')

    @yield ('content')

@endsection