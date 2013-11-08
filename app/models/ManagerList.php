<?php

class ManagerList extends Eloquent {

    public static function get_list_name($id)
    {
       $list = static::where('id', '=', $id)->pluck('name');
        return $list;
    }

    
}