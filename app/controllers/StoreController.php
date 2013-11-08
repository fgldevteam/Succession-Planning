<?php

Class StoreController extends BaseController{


    public function getIndex() {

  //       $people = DB::table('people')->get();
        $stores = Store::all();
         //get a table of everyone
         return View::make('storelist')
            ->with('stores', $stores);
    }

    public function view($id) {

        $store = Store::get_store_details_by_id($id);
        $sgm = Manager::get_store_sgm($store->store_number);
        $roster = Manager::get_store_roster_minus_sgm($store->store_number);
        // $manager = Manager::get_manager_details($id);
        // $note = Note::get_manager_notes($id);
        // $store = Store::get_store_details($manager->store);

            return View::make('storeprofile')
                ->with('store', $store)
                ->with('sgm', $sgm)
                ->with('roster', $roster);

    }

}


