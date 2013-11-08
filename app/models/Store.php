<?php
class Store extends Eloquent {

    public static function get_store_details_by_id($id)
    {
        // $store = static::where('store_number', '=', $id)->first();

        // if($store){
        //     return $store;
        // } else{
        //     return NULL;
        // }
        $store = static::where('id', '=', $id)->first();
        return $store;

    }

    public static function get_store_details_by_store_number($store_number)
    {
        // $store = static::where('store_number', '=', $id)->first();

        // if($store){
        //     return $store;
        // } else{
        //     return NULL;
        // }
        $store = static::where('store_number', '=', $store_number)->first();
        return $store;

    }
}