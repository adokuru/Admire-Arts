<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\ArtCategory;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arts = Art::all();
        return view('art.index', compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        $art_categories = ArtCategory::all()->pluck('name', 'id');
        $artists = Artist::all()->pluck('name', 'id');
        return view('art.create', compact('art_categories', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // cache the file
            $file = $request->file('art_file_path');

            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'art-photo-' . time() . '.' . $file->getClientOriginalExtension();

            // save to storage/app/photos as the new $filename
            $path = $file->storeAs('art', $filename);

            $post = new Art([
                'name' => $request->title,
                'art_category_id' => $request->art_categories,
                'artist_id' => $request->artist,
                'short_note' => $request->short_note,
                'amount' => $request->amount,
                'description' => $request->description,
                'art_file_path' => '/storage/'.$path,
            ]);
            
            $post->save();

            return redirect()->route('art.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        //
    }
}
