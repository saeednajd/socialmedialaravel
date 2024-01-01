<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Http\Requests\StorecommentsRequest;
use App\Http\Requests\UpdatecommentsRequest;
use Illuminate\Http\Request;

class CommentsController extends Controller
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
    public function store(Request $request)
    {
        if(auth()->check()){
            
            
            $result=comments::create([
                'content' => $request->input('commnet'),
                'post_id' => $request->input('post_id'),
                'user_id' => auth()->user()->id,
            ]);
            
            return redirect()->route('postsinglepage', ['id' => $request->input('post_id')]);
        } else {
            return redirect()->route('login');
        }
        
    }
    /**
     * Display the specified resource.
     */
    public function show(comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentsRequest $request, comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comments)
    {
        //
    }
}
