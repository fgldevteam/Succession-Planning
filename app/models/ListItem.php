<?php

class ListItem extends Eloquent {

    public static function get_lists_containing_manager($id)
    {
       $list = static::where('manager_id', '=', $id)->get();
        return $list;
    }

}