<?php

class DistrictController extends BaseController {


    public function getIndex() {

        $lists = District::all();
         //get a table of everyone
         return View::make('districts')
            ->with('districts', $lists);
    }

    

}