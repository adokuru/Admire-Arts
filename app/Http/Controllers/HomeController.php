<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        //
        return view('welcome');

    }

    public function artwork()
    {
        //
        return view('artwork');
    }

    public function auction()
    {
        //
        return view('auctions');
    }

    public function artist()
    {
        //
        return view('artists');

    }

    public function blog()
    {
        //

    }

}
