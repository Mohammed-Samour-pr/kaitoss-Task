<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blog = blog::all();
        return view('controlPanel.pages.blog.index', compact('blog'));

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'title' => 'required',
        ]);

        $imageName = $request->image->getClientOriginalName();
        $request->image->move(('img_blog/'), $imageName);
        $data = $request->except('_token');
        $data['image'] = $imageName;
        $blog = blog::create($data);
        return redirect()->back()->with('Add', ' updated successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'title' => 'required',

        ]);


        $blog = blog::where('id', $request->id)->first();
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(('img_services/'), $imageName);
            $blog->image = $imageName;
        }
        $blog->save();
        return redirect()->back()->with('edit', ' updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $blog = blog::findOrFail($request->id)->delete();
        return redirect()->back()->with('delete', ' updated successfully!');

    }
}
