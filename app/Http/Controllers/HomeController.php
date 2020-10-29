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
    public function dashboard()
    {
        # code...
        $contacts = Artcontact::all();
        return view('dashboard', compact('contacts'));
    }

    public function Home()
    {
        //
        $arts = Art::orderBy('id', 'desc')->take(6)->get();
        $feautredart = Art::all()->random(5);
        $artistart = Art::all()->random(9);
        return view('welcome', compact('arts', 'feautredart', 'artistart'));

    }

    public function artwork()
    {
        //
        $feautredart = Art::orderby('amount', 'desc')->paginate(21);
        return view('artwork', compact('feautredart'));
    }

    public function auction()
    {
        //
        $collection = Art::inRandomOrder()->paginate(21);
        return view('auctions', compact('collection'));
    }

    public function viewrooms()
    {
        //
        $collection = Art::inRandomOrder()->paginate(12);
        return view('viewRoom', compact('collection'));
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
        $blogs= Artist::orderBy('DisplayName', 'asc')->paginate(12);
        return view('blog', compact('blogs'));

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

    public function contact()
    {
        //
        
        return view('contact');
    }

    public function newsletter()
    {
        //
       
        return redirect()->route('home')->with('alerts', 'Thanks for Subscribing');
        
    }

    public function contactform(Request $request)
    {
        //
        //dd($request);

        $contact = new Artcontact([
            'art_id' => 1,
            'contact_name' => $request->form_name,
            'contact_email' => $request->form_email,
            'note' => $request->form_message,
        ]);
        
        $contact->save();
        return redirect()->route('contact')->with('contact', 'Message Sent!');
        
       
    }

    

    public function contactShow($id)
    {
        # code...
        $contact = Artcontact::where('id', $id)->first();

       
        
        return view('contactShow', compact('contact'));
    }

    public function Museums()
    {
        # code...
       
        return view('Museums');
    }
    

    
}
