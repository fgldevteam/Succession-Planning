<?php


class Manager extends Eloquent{

    public static function get_manager_details($id)
    {
        $manager = static::where('id', '=', $id)->first();
        return $manager;
    }

    public static function get_store_sgm($store_number){
        $sgm = static::whereRaw('store='. $store_number . ' and position="SGM"')->first();
        // if($sgm){
            return $sgm;
        //}
    }

    public static function get_store_roster_minus_sgm($store_number){
        $roster = static::whereRaw('store='. $store_number. ' and position !="SGM"')->get();
        return $roster;
    }

    public static function get_store_manager($store_number){
        $manager = static::whereRaw('store='. $store_number. ' and position ="SGM"')->first();
        return $manager;
    }

    public static function get_count($store_number){
        $count = DB::table('managers')
                    ->where('store', '=', $store_number)
                    ->count();
        return $count;
    }

    public static function get_details_by_manager_name($first, $last){
        $manager = static::whereRaw('first="'.$first .'" and last="'.$last . '"')->first();
        return $manager;     
    }


}