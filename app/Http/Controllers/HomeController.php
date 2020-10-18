<?php

namespace App\Http\Controllers;
use App\Models\Art;
use App\Models\Artist;
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
        $arts = Art::orderBy('id', 'desc')->take(6)->get();
        return view('welcome', compact('arts'));

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

    public function artslug($slug)
    {
        //
        $art = Art::where('slug', $slug)->get();
        
        return view('single', compact('art'));
    }
    

    public function apitest()
    {
        //
       return Artist::orderBy('DisplayName', 'asc')->paginate(10);
        
       
    }

}
