@extends('layout')

@section('title')
    FGL Succession Planning :: Lists
@endsection

@section('nav')
    <img src="/images/app/fgl.png" id="fgl" />
    <li><a href="/map"><img src="/images/app/map.png" /></a></li>
    <li><a href="/nso"><img src="/images/app/nso.png" /></a></li>
    <li><a href="/people"><img src="/images/app/people.png" /></a></li>
    <li><a href="/list" class="active"><img src="/images/app/lists.png" /></a></li>
@endsection

@section('content')




    <h3>Lists</h3>
    <table class="table table-condensed table-hover">
        <tr>
            <th>Name</th>
            <th>Created At</th>
            <th></th>
        </tr>
    @foreach($lists as $list)
        <tr>
            <td><a href="/list/view/{{ $list->id }}">{{ $list->name }}</a></td>
            <td>{{ $list->created_at }}</td>
            <td>


                <a href="/list/send/{{ $list->id }}" class="btn btn-small btn-default"><i class="icon-envelope"></i></a>
                <a href="/list/delete/{{ $list->id }}" class="btn btn-small btn-danger"><i class="icon-trash icon-white"></i></a>
            </td>



        </tr>
    @endforeach

    </table>
    <h4>Add New List</h4>
    {{ Form::open(array('action' => 'ListController@addList', 'class'=>'form-inline')) }}
        {{ Form::text('name', '', array('class'=>'input-medium', 'placeholder'=>'List Name')) }}
        {{ Form::text('description', '', array('class'=>'input-large', 'placeholder'=>'List Description')) }}
        {{ Form::submit('Add New List', array('class' => 'btn btn-small btn-success')) }}
    {{ Form::close() }}

@endsection