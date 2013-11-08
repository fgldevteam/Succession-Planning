<?php

Class UserController extends BaseController{

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

    public function getIndex(){

        echo "you got the index";

    }


    public function add(){

        echo "add a new user";
    }

    public function confirm(){

        echo "confirmed!";
    }


   // App::abort(404);
}