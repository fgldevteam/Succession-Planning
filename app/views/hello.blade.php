@extends('layout')

@section('title')
FGL Succession Planning :: Welcome
@endsection

@section('nav')
@yield('nav')
@endsection

@section('content')
    <a class="btn btn-primary btn-large" href="/map"><i class="icon-globe icon-white"></i> Map</a>
    <a class="btn btn-primary btn-large" href="/nso"><i class="icon-white icon-leaf"></i> New Stores</a>
    <a class="btn btn-primary btn-large" href="/people"><i class="icon-user icon-white"></i> People</a>
    <a class="btn btn-primary btn-large" href="/stores"><i class="icon-flag icon-white"></i> Stores</a>
    <a class="btn btn-primary btn-large" href="/lists"><i class="icon-list icon-white"></i> Lists</a>
@endsection