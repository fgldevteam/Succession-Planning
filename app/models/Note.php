<?php


class Note extends Eloquent {

    public static function get_manager_notes($id)
    {
        $note = static::where('manager_id', '=', $id)->first();

        if($note){
            return $note;
        } else{
            return NULL;
        }


    }
}