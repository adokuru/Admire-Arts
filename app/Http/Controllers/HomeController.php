<?php

namespace App\Http\Controllers;
use App\Models\Art;
use App\Models\Artcontact;
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
        $artists= Artist::orderBy('DisplayName', 'asc')->paginate(12);
        return view('artists', compact('artists'));

    }

    public function blog()
    {
        //

    }

    public function artslug($slug)
    {
        //
        $art = Art::where('slug', $slug)->first();

       
        
        return view('single', compact('art'));
    }
    

    public function apitest()
    {
        //
       return Artist::orderBy('DisplayName', 'asc')->paginate(10);
        
       
    }

    public function artcontact(Request $request)
    {
        //
        //dd($request);

        $art = Art::where('ID', $request->form_art)->first();
        $contact = new Artcontact([
            'art_id' => $request->form_art,
            'contact_name' => $request->form_name,
            'contact_email' => $request->form_email,
            'note' => $request->form_message,
        ]);
        
        $contact->save();
        return redirect()->route('art.slug', $art->slug)->with('alert', 'Message Sent!');
        
       
    }

    

}
