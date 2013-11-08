@extends('layout')

@section('title')
    FGL Succession Planning :: People
@endsection


@section('nav')
@yield('nav')
@endsection

@section('content')
<div class="row">
    <div class="span4">
    <h3>People</h3>
    </div>

    <div class="span6">
        <br />
            <div class="btn-group">
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
      <i class="icon-list"></i> Add Selected to List&hellip;
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    <?php $lists = ManagerList::all(); ?>
      @foreach($lists as $list)

        <?php
            $count = ListItem::where('list_id', '=', $list->id)->count();
        ?>
        <li><a href="#">{{$list->name}} <small style="color: #999; float: right;">({{$count}})</small></a> </li>
        <!-- <li><a href="#">{{$list->name}}</a></li> -->
      @endforeach
    </ul>
  </div>
    <!-- <a class="btn btn-small" href="#"><i class="icon-eye-open"></i> Compare Selected</a> -->

<!--     <select>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select> -->

    <!-- <a class="btn btn-small" href="#"><i class="icon-search"></i> Search</a> -->
    </div>
</div>



    </h3>
    {{ Form::open(array('action' => 'ListController@addList')) }}
    <table class="table table-hover">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Pos.</th>
            <th>Duration</th>
            <th>#</th>
            <th>Store Name</th>
            <th>Location</th>

            <th></th>
        </tr>
    @foreach($people as $person)
        <tr>
            <td>{{Form::checkbox('person-select', $person->id)}}
            
            </td>
            
            <td><a href="/people/view/{{$person->id}}">{{ $person->first . ' ' . $person->last }}</a>
                <?php $n = Note::get_manager_notes($person->id); if($n && $n->note) { echo "<abbr title='Has Notes'><i class='icon-file'></i></abbr>"; } ?>
<?php
   //is on a list
                    $lists = ListItem::get_lists_containing_manager($person->id);
                    //create a string with names of lists
                    $listson = "";
                    $i=1;
                    foreach($lists as $list){
                        $name = ManagerList::get_list_name($list->list_id);
                        if($i == count($lists)) {
                            $listson .= $name; 
                        } else {
                            $listson .= $name . ", "; 
                        }

                        $i++;
                    }
                    
                    if(count($lists) > 0){
                        echo "<abbr title='Listed on " . $listson. "'><i class='icon-ok'></i></abbr></h2>";
                    }
   ?>             
            </td>
            <td>{{$person->position}}</td>
            <td>{{$person->duration}}</td>
            <td>{{$person->store}}</td>
            <td><?php $s = Store::get_store_details_by_store_number($person->store); if($s){echo "<a href='/store/view/" . $s->id . "'>" . $s->name . "</a>";} ?></td>
            <td>@if($s) {{$s->city}}, {{$s->province}} @endif</td>

            <td id="attrib-col">
                <?php
                    //has picture
                    if($person->photo_thumb != "no-image"){ echo "<abbr title='Has Picture'><i class='icon-picture'></i></abbr>"; }
                    
                    //ulead
                    if( $person->ulead_grad == "yes"){ echo "<abbr title='uLead Graduate'><img src='/images/app/ulead-grad.png' /></abrr>"; }
                    //moving
                    if( $person->move == "Same Province"){ echo "<abbr title='Move Within Province'><img src='/images/app/move-province.png' /></abrr>"; }
                    if( $person->move == "Eastern/Western Canada"){ echo "<abbr title='Move Eastern/Western Canada'><img src='/images/app/move-regional.png' /></abrr>"; }
                    if( $person->move == "Anywhere"){ echo "<abbr title='Move Anywhere'><img src='/images/app/move-anywhere.png' /></abbr>"; }
                    //has note

                 

                   // echo "<a href='/list/view/".$person->id."'><abbr title='On List'><img src='/images/app/listed.png' /></abbr></a>";
                ?>
            </td>
        </tr>
    @endforeach

    </table>

    {{Form::close()}}
@endsection