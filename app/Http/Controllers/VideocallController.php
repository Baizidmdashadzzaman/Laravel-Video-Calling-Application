<?php

namespace App\Http\Controllers;

use App\Models\Videocall;
use Illuminate\Http\Request;

class VideocallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function video_call_give()
    {
     return view('givecall');
    } 
    public function video_call_take()
    {
     return view('takecall');
    } 	
	
	public function video_call_take_call(Request $request)
    {
	 $video=$request->video_link;
     return view('takecall',compact('video'));
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
     * @param  \App\Models\Videocall  $videocall
     * @return \Illuminate\Http\Response
     */
    public function show(Videocall $videocall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videocall  $videocall
     * @return \Illuminate\Http\Response
     */
    public function edit(Videocall $videocall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videocall  $videocall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videocall $videocall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videocall  $videocall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videocall $videocall)
    {
        //
    }
}
