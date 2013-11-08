<?php

Class PeopleController extends BaseController{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getIndex() {

  //       $people = DB::table('people')->get();
        $people = Manager::all();
         //get a table of everyone
         return View::make('people')
            ->with('people', $people);
    }

    public function view($id) {

        $manager = Manager::get_manager_details($id);
        $note = Note::get_manager_notes($id);
        $store = Store::get_store_details_by_store_number($manager->store);

            return View::make('individualProfile')
                ->with('manager', $manager)
                ->with('note', $note)
                ->with('store', $store);

    }

    public function compareSelected() {
        $r = 'People Comparison';
            return View::make('confirmation')
                ->with('response', $r );
    }

    public function addSingletoList($manager, $list) {
        // $managerid = 
        $managerid = Request::segment(3);
        $listid = Request::segment(5);

        $listitem = array(
            'manager_id' => $managerid,
            'list_id' => $listid
        );

        //$record = ListItem::where('manager_id', '=', $managerid )->first();
        $record = DB::table('list_items')
                    ->where('manager_id', $managerid)
                    ->where('list_id', $listid)
                    ->get();
        if($record){
            //this manager is already on this list...
            $r = "Manager already exists on list";
            $r .= "<br /><a href='/people/view/" . $managerid. "'>Go Back</a>";

            return View::make('confirmation')
                ->with('response', $r );
        } else {
            $li = new ListItem();
            $li->manager_id = $managerid;
            $li->list_id = $listid;
            $li->save();

            $r = 'Successfully added to list!';
            $r .= "<br /><a href='/people/view/" . $managerid. "'>Go Back</a>";
            return View::make('confirmation')
                ->with('response', $r );
        }
    }

    public function addGrouptoList(){

        echo "add group to a list";   
    }

    public function addNote(){
        $managerid = Input::get('managerid');
        $noteid = Input::get('noteid');
        $note = Input::get('note');

        $thisnote = array(
            'manager_id' => $managerid,
            'noteid' => $noteid,
            'note' => $note
        );

        $record = Note::where('manager_id', '=', $managerid)->first();

        if($record){ //update note record

            Note::where('manager_id', '=', $managerid)->update(array('note' => $note));
            $r = 'Notes updated!<br /><a href="/people/view/'. $managerid .'">Return</a>';
            return View::make('confirmation')
                ->with('response', $r );



        } else { //insert new note
            $n = new Note();
            $n->note = $note;
            $n->manager_id = $managerid;
            $n->save();

            $r = 'New note created!<br /><a href="/people/view/'. $managerid .'">Return</a>';
            return View::make('confirmation')
                ->with('response', $r );
        }
    }

}