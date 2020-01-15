<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addVideo(Request $request)
    {
        $video = new Videos();

        $file = $request->file('videoFile');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
    $image['filePath'] = $name;
    $file->move(public_path().'/videoFile/', $name);

    $video->video = env('APP_URL').'/videoFile/'. $name;
   



        $video->user_id = $request->input("user_id");
        $video->channel_id = $request->input("channel_id");
        $video->title = $request->input("title");
        $video->description = $request->input("description");
     




        $video->save();

        return back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(Videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(Videos $videos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videos $videos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videos $videos)
    {
        //
    }



   
}
