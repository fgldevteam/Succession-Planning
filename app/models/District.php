<?php


class District extends Eloquent{

    public static function get_DM($district_id){
        $DM = static::where('id', '=', $district_id)->first();
        return $DM;
    }

    public static function get_count($district_id){
        $count = Store::where('district', '=', $district_id)->count();
        return $count;
    }

}
