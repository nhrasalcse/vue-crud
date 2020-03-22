<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function  login( Login $request){

        return User::testData($request);
//    return $validation=  User::ValidationData($request->all());

    }
}
