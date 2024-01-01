<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use App\Models\comments;
use Illuminate\Http\Request;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //


    }
    public function singlepostpage(posts $posts,Request $request)
    {
        $post = posts::find($request);
        // dd($request->postid);
        $thispostcomments = comments::where('post_id', $request->postid)->get();
        $allposts=posts::all();
        return view('postsinglepage',['allposts'=>$allposts,'singlepost'=>$post,'thispostcomments'=>$thispostcomments]);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostsRequest $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts)
    {
        //
    }
}
