@extends('layout')

@section('title')
    FGL Succession Planning :: {{ $listdetails->name }}
@endsection


@section('nav')
@yield('nav')
@endsection

@section('content')
<div class="row">
    <div class="span4">
        <h3>{{$listdetails->name}}</h3>
    </div>

    <div class="span4">
        <br />
        <a class="btn btn-small" href="#"><i class="icon-envelope"></i> E-mail this List</a>
        <a class="btn btn-small" href="javascript:window.print()"><i class="icon-print"></i> Print this List</a>

    </div>
</div>

<p>{{$listdetails->description}}</p>
<br />
<table class="table table-condensed table-hover">
            <tr>
                
                <th>Name</th>
                <th>Pos.</th>
                <th>#</th>
                <th>Store</th>
                <th>Location</th>
                <th>Duration</th>
                <th></th>
            </tr>
    @foreach($listitems as $item)
    <?php
    //$mid = $item->manager_id;
    $manager = Manager::get_manager_details($item->manager_id);
    ?>
            <tr>
                

                <td><a href="/people/view/{{$item->manager_id}}">{{$manager->first}} {{$manager->last}}</a>
                     <?php $n = Note::get_manager_notes($manager->id); if($n && $n->note) { echo "<abbr title='Has Notes'><i class='icon-file'></i></abbr>"; } ?>
                </td>
                <td>{{$manager->position}}</td>
                <td>{{$manager->store}}</td>
                <td><?php $s = Store::get_store_details_by_store_number($manager->store); echo $s->name; ?></td>
                <td>@if($s) {{$s->city}}, {{$s->province}} @endif</td>
                <td>{{$manager->duration}}</td>
                <td id="attrib-col">
                    <?php
                    //ulead
                    if( $manager->ulead_grad == "yes"){ echo "<abbr title='uLead Graduate'><img src='/images/app/ulead-grad.png' /></abrr>"; }
                    //moving
                    if( $manager->move == "Same Province"){ echo "<abbr title='Move Within Province'><img src='/images/app/move-province.png' /></abrr>"; }
                    if( $manager->move == "Eastern/Western Canada"){ echo "<abbr title='Move Eastern/Western Canada'><img src='/images/app/move-regional.png' /></abrr>"; }
                    if( $manager->move == "Anywhere"){ echo "<abbr title='Move Anywhere'><img src='/images/app/move-anywhere.png' /></abbr>"; }
                    //has note
                    ?>



                </td>

            </tr>
    @endforeach
</table>


<a href="/lists">View all lists</a>
@endsection