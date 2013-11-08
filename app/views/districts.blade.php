@extends('layout')

@section('title')
    FGL Succession Planning :: Districts
@endsection

@section('nav')
@yield('nav')
@endsection

@section('content')
    <h3>Districts</h3>

    <table class="table table-hover">
        <tr>
           
            <th>Name</th>
            <th>District Manager</th>
            <th>Region</th>
            <th>Store Count</th>
        </tr>
    
        
        @foreach($districts as $district)
        <tr>
            <td><a href="/districts/view/{{$district->id}}">{{$district->name}}</a></td>
            <?php
                $name = explode(" ", $district->DM);
                $m = Manager::get_details_by_manager_name($name[0], $name[1]); 
            ?>
            <td><a href="/people/view/{{$m->id}}">{{$district->DM}}</a></td>
            <td>{{$district->region}}</td>
            <td>{{District::get_count($district->id)}}</td>
        </tr>
        @endforeach


    </table>
@endsection