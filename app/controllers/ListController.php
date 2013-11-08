<?php

Class ListController extends BaseController{


    public function getIndex() {

        $lists = ManagerList::all();
         //get a table of everyone
         return View::make('lists')
            ->with('lists', $lists);


    }

    public function addList() {

        //get list name from form, don’t create duplicate list
        $listname = Input::get('name');
        $listdesc = Input::get('description');

        // $v = ManagerList::validate(array('name'=> $listname));
        // if( $v !== true){

        //     return Redirect::to('/list')->withErrors($v);
        // } else{
        //     $ml = new ManagerList();
        //     $ml->name = $listname;
        //     $ml->save();
        //     echo "New list <b>" .$listname . "</b> created";
        //     echo "<br /><a href='/list'>Return</a>";
        // }
        $record = ManagerList::where('name', '=', $listname)->first();
        if($record){ //list already used
            $r = $listname . ' is already used... try again.<br /><a href="/list">Return</a>';
            return View::make('confirmation')
                ->with('response', $r );

        } else{
            $ml = new ManagerList();
            $ml->name = $listname;
            $ml->description = $listdesc;
            $ml->save();
            $r = "New list <b>" .$listname . "</b> created!<br /><a href='/list'>Return</a>";
            return View::make('confirmation')
                ->with('response', $r );

        }
        //send back to view of all lists

    }

    public function deleteList($id) {

        $l = ManagerList::find($id);
        $l->delete();
        $r = "List Deleted!<br /><a href='/lists'>Return</a>";
        return View::make('confirmation')
                ->with('response', $r );
       
    }

    public function openList($listid) {

        $listdeets = ManagerList::where('id', '=', $listid )->first();
        $selectedList = ListItem::where('list_id', '=', $listid)->get();

        return View::make('singlelist')
            ->with('listitems', $selectedList)
            ->with('listdetails', $listdeets);
    }

    public function renameList() {
        echo "rename a list";
    }

    public function emailList() {
        echo "email selected list";
    }

    public function printList() {
        echo "print a list";
    }
}