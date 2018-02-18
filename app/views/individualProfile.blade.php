@extends('layout')

@section('title')
    FGL Succession Planning :: Profile
@endsection


@section('nav')
    <img src="/images/app/fgl.png" id="fgl" />
    <li><a href="/map"><img src="/images/app/map.png" /></a></li>
    <li><a href="/nso"><img src="/images/app/nso.png" /></a></li>
    <li><a href="/people" class="active"><img src="/images/app/people.png" /></a></li>
    <li><a href="/list"><img src="/images/app/lists.png" /></a></li>
@endsection

@section('content')

<div id="managerprofile">

<div class="row">
    <div class="span6" style="margin-left: 0;">
        <h2>{{$manager->first}} {{$manager->last}}</h2> 

            
    </div>
    <div class="span4">

        <br />
        <div class="btn-group">
            <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                <i class="icon-list"></i> Add to List&hellip; <span class="caret"></span>
            </button>
            
            <ul class="dropdown-menu">
                <?php $lists = ManagerList::all(); ?>
                  @foreach($lists as $list)
                    <?php
                    $count = ListItem::where('list_id', '=', $list->id)->count();
                    ?>
                  <li><a href="/people/view/{{$manager->id}}/add/{{$list->id}}">{{$list->name}} <small style="color: #999; float: right;">({{$count}})</small></a> </li>
                  @endforeach
            </ul>
            
         </div>
         <a class="btn btn-small" href="javascript:window.print()"><i class="icon-print"></i> Print This Page</a>

    </div>
    </div>

    <div class="row">
    <div class="span3">
        <?php
        if($manager->photo_thumb !== "no-image"){
            echo "<img class='img-polaroid' src='/images/managers/".$manager->photo_thumb."'' />";
        } else {
            echo "<img class='img-polaroid' src='/images/managers/placeholder-pic.gif' />";

        }
        ?>
    </div>
    <div class="span7">

     <!-- <h5>Expereince</h5> -->
            <table class="table table-condensed">
                <tr>
                    <th>Store</th>
                    <th>Position</th>
                    <th>Duration</th>
                </tr>

                <tr class="success">
                    <td>{{$manager->store}} @if($store)<a href="/store/view/{{$store->id}}">{{$store->name}}</a>@endif</td>
                    <td>{{$manager->position}}</td>
                    <td>{{$manager->duration}}</td>
                </tr>

                @if($manager->past_pos_1)
                <tr>
                    <td>{{$manager->past_store_1}} <?php $s = Store::get_store_details_by_store_number($manager->past_store_1); if($s) {echo "<a href='/store/view/". $s->id ."'>".$s->name."</a>"; } ?></td>
                    <td>{{$manager->past_pos_1}}</td>
                    <td>{{$manager->past_dur_1}}</td>
                </tr>
                @endif

                @if($manager->past_pos_2)
                <tr>
                    <td>{{$manager->past_store_2}} <?php $s = Store::get_store_details_by_store_number($manager->past_store_2); if($s) {echo "<a href='/store/view/". $s->id ."'>".$s->name."</a>";} ?></td>
                    <td>{{$manager->past_pos_2}}</td>
                    <td>{{$manager->past_dur_2}}</td>
                </tr>
                @endif

                @if($manager->past_pos_3)
                <tr>
                    <td>{{$manager->past_store_3}} <?php $s = Store::get_store_details_by_store_number($manager->past_store_3); if($s) {echo "<a href='/store/view/". $s->id ."'>".$s->name."</a>";}  ?></td>
                    <td>{{$manager->past_pos_3}}</td>
                    <td>{{$manager->past_dur_3}}</td>
                </tr>
                @endif

                @if($manager->past_pos_4)
                <tr>
                    <td>{{$manager->past_store_4}} <?php $s = Store::get_store_details_by_store_number($manager->past_store_4); if($s) {echo "<a href='/store/view/". $s->id ."'>".$s->name."</a>";}  ?></td>
                    <td>{{$manager->past_pos_4}}</td>
                    <td>{{$manager->past_dur_4}}</td>
                </tr>
                @endif

            </table>

    </div>

</div>
<br />
<div class="row">

    <div class="span5">

 <!-- <h5>Most Recent Performance Evaluation</h5> -->
        <table class="table table-condensed">
            <tr>
                <th>Tribal <br />Customs</th>
                <th>5 Success <br />Factors</th>
                <th>Leadership <br />Brand</th>
            </tr>
            <tr>
                <td><span class="lead">{{$manager->tribal_customs_score}}</span></td>
                <td><span class="lead">{{$manager->five_factors_score}}</span></td>
                <td><span class="lead">{{$manager->leadership_brand_score}}</span></td>
            </tr>
        </table>
        <br />
        <table class="table table-condensed">
            <tr>
                <th>Willingness to Move</th>
                <th>uLead Gradute</th>
            </tr>
            <tr>
                <td>

                    <?php if( $manager->move == "Anywhere"){ echo "<abbr title='Move Anywhere'><img src='/images/app/move-anywhere.png' /></abbr> " . $manager->move; } ?>
                    <?php if( $manager->move == "Eastern/Western Canada"){ echo "<abbr title='Move Eastern/Western Canada'><img src='/images/app/move-regional.png' /></abbr> " . $manager->move; } ?>
                    <?php if( $manager->move == "Same Province"){ echo "<abbr title='Same Province'><img src='/images/app/move-province.png' /></abbr> " . $manager->move; } ?>
                    <?php if( $manager->move == "No"){ echo "<abbr title='Same Province'><img src='/images/app/no-move.png' /></abbr> " . $manager->move; } ?>

                </td>
                <td>
                    <?php if( $manager->ulead_grad == "yes"){ echo "<abbr title='uLead Graduate'><img src='/images/app/ulead-grad.png' /></abrr> Yes"; } else { echo "No";} ?>
                </td>
            </tr>

        </table>


        <br />
    </div>

    <div class="span5">


        <table class="table table-condensed">
            <tr>
                <th>Education</th>
            </tr>
            <tr>
                <td>
                    <p>
                    {{$manager->education}}<br />
                    @if($manager->edu_focus)
                    <b>Focus</b>: {{$manager->edu_focus}}
                    @endif
                    </p>
                </td>
            </tr>
        </table>

        <br/>
        <!-- <h5>Sport &amp; Lifestyle</h5> -->
        <table class="table table-condensed">
            <tr>
                <th>Sport/Activity</th>
                <th>Participation Level</th>
            </tr>
            @if($manager->sport_1)
            <tr>
                <td>{{$manager->sport_1}}</td>
                <td>{{$manager->sport_level_1}}</td>
            </tr>
            @endif

            @if($manager->sport_2)
            <tr>
                <td>{{$manager->sport_2}}</td>
                <td>{{$manager->sport_level_2}}</td>
            </tr>
            @endif

            @if($manager->sport_3)
            <tr>
                <td>{{$manager->sport_3}}</td>
                <td>{{$manager->sport_level_3}}</td>
            </tr>
            @endif
        </table>


    </div>
</div>
<div class="row">
    <div class="span10">
        <table class="table table-condensed">
            <tr>
                <th>Career Path</th>
                <th>Comments</th>
            </tr>
            <tr>
                <td>{{ $manager->career_path }}</td>
                <td>@if($manager->career_path_other)<i><span class="quote">&ldquo;</span> {{$manager->career_path_other}} <span class="quote">&rdquo;</span></i> @endif</td>
            </tr>

    <!--     <h5>Career Path</h5>
        <p>{{ $manager->career_path }}</p>
        @if($manager->career_path_other)
            <i> {{$manager->career_path_other}} </i>
        @endif -->


        </table>
        <br />
        <table class="table table-condensed">
            <tr>
                <th>Notes</th>
            </tr>
            <tr>
                <td>
                             <p>
                <?php
            //check if on a list at all. 
            $lists = ListItem::get_lists_containing_manager($manager->id);
            
            // echo "<pre>";
            // print_r($lists);
            // echo "</pre>";
            //create a string with names of lists
            $listson = "";
            $i=1;

            if(count($lists) > 0 ){
                echo "<i class='icon-ok'></i> Listed in: ";
            }
            foreach($lists as $list){
                $name = ManagerList::get_list_name($list->list_id);
                if($i == count($lists)) {
                    echo "<a href='/list/view/".$list->list_id."'>" . $name . "</a>";
                } else {
                    echo "<a href='/list/view/".$list->list_id."'>" . $name . "</a>, ";
                }

                $i++;
                
            }
            
           

        ?>
    </p>
        <pre class="hidden">@if($note){{$note->note}}@endif</pre>
                    
        {{ Form::open(array('action' => 'PeopleController@addNote', 'class'=>'form-inline')) }}
           @if($note)
           <input type="hidden" value="{{$note->id}}" name="noteid" />
           @endif
           <input type="hidden" value="{{$manager->id}}" name="managerid" />
           <textarea rows="2" class="input-xxlarge" name="note">@if($note){{$note->note}}@endif</textarea>

           <button class="btn btn-large btn-success" style="margin-top: 5px; float: right;" type="submit" value=""><i class="icon-ok icon-white"></i>&nbsp;  Save Notes</button>
           <!--  {{ Form::submit('Save', array('class' => 'btn btn-small btn-success')) }} -->
           <!-- <button class="btn btn-small btn-success"><i class="icon-ok icon-white"></i> Save Notes</button> -->

        {{ Form::close() }}
                </td>

            </tr>

        </table>
        <br />

    </div>
</div>

</div>



@endsection