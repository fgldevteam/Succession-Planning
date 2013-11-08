@extends('layout')

@section('title')
    FGL Succession Planning :: Single Store
@endsection

@section('nav')
@yield('nav')
@endsection

@section('content')
    <h3>{{$store->store_number}} {{$store->name}}</h3>
    <address>
        {{$store->address}}<br />
        {{$store->city}}, {{$store->province}}<br />
        {{$store->pc}}

    </address>
    {{$store->lat}}, {{$store->lng}}


<!-- <div style="width:425px;height:350px"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=130%2BBridlewood%2BClose%2BSW%2BCalgary(240+Oakville+Burloak)&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe><br><table width="425" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=130%2BBridlewood%2BClose%2BSW%2BCalgary(240+Oakville+Burloak)&ie=UTF8&z=12&t=m&iwloc=near">View Larger Map</a></small></td><td align="right"><small><a href="http://www.embedgooglemap.com">embed google map</a></small></td></tr></table></div> -->


    @if($sgm)
        <h4>SGM: <a href="/people/view/{{$sgm->id}}">{{$sgm->first}} {{$sgm->last}}</a> &nbsp;&nbsp; <small>( {{$sgm->duration}} )</small></h4>
    @else
        <h4>No SGM Listed</h4>
    @endif

    <br />
    <table class="table table-condensed">
        <tr>
            <th>Store Management</th>
            <th></th>
            <th></th>
        </tr>
    @foreach($roster as $manager)
        <tr>
            <td><a href="/people/view/{{$manager->id}}">{{$manager->first}} {{$manager->last}}</a></td>
            <td>{{$manager->position}}</td>
            <td>{{$manager->duration}}</td>
        </tr>

    @endforeach
    </table>
@endsection
