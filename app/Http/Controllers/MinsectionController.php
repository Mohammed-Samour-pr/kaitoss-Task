<?php

namespace App\Http\Controllers;

use App\Models\minsection;
use Illuminate\Http\Request;

class MinsectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minsection = Minsection::find(1);
        return view('controlPanel.pages.minsection.minsection', compact('minsection'));
    }


    public function update(Request $request)
    {


        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'title' => 'required',
            'video_link' => 'required',
        ]);
        $minsection = minsection::where('id', 1)->first();
        $minsection->title = $request->title;
        $minsection->description = $request->description;
        $minsection->video_link = $request->video_link;
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(('img_minsection/'), $imageName);
            $minsection->image = $imageName;
        }
        $minsection->save();
        return redirect()->back()->with('success', 'Minsection updated successfully!');

    }


}
