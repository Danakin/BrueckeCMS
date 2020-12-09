<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostType;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttypes = PostType::all();
        return view('admin.post-types.index', compact('posttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post-types.create');
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
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function show(PostType $posttype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function edit(PostType $posttype)
    {
        if(auth()->user() && auth()->user()->cant('view', $posttype)) {
            return redirect()->back()->withErrors(['Unauthorised', 'You are not allowed to do this']);
        }
        return view('admin.post-types.edit', compact('posttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostType $posttype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostType $posttype)
    {
        $name = $posttype->name;
        $posttype->delete();
        return redirect()->route('admin.posttypes.index')->with('success', 'PostType ' . $name . ' successfully deleted.');
    }
}
