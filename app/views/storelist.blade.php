@extends('layout')

@section('title')
    FGL Succession Planning :: Stores
@endsection

@section('nav')
@yield('nav')
@endsection

@section('content')
    <h3>Stores</h3>

    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Location</th>
            <th>SGM</th>
            <th>DM</th>
            <th>Count</th>
        </tr>

    @foreach($stores as $store)
        <tr>
            <td>{{$store->store_number}}</td>
            <td><a href="/store/view/{{$store->id}}">{{$store->name}}</a></td>
            <td>{{$store->city}}, {{$store->province}}</td>
            <td><?php $m = Manager::get_store_manager($store->store_number); if($m) { echo "<a href='/people/view/".$m->id."'>" . $m->first . " " . $m->last . "</a>"; } else { echo "<span class='error'>...missing...</span>"; } ?></td>
            <td><?php $d = District::get_DM($store->district); echo $d->DM; ?></td>
            <td><?php $m = Manager::get_count($store->store_number); print_r($m); ?></td>
        </tr>


    @endforeach

    </table>
@endsection

