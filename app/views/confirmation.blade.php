@extends('layout')

@section('title')
    FGL Succession Planning :: Confirm
@endsection

@section('nav')
    <img src="/images/app/fgl.png" id="fgl" />
    <li><a href="/map"><img src="/images/app/map.png" /></a></li>
    <li><a href="/nso"><img src="/images/app/nso.png" /></a></li>
    <li><a href="/people" class="active"><img src="/images/app/people.png" /></a></li>
    <li><a href="/list"><img src="/images/app/lists.png" /></a></li>
@endsection



@section('content')
    {{ $response }}
@endsection