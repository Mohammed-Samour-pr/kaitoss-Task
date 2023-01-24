<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = aboutus::find(1);
        return view('controlPanel.pages.about.about', compact('aboutus'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'about_us' => 'required',
            'Vision' => 'required',
            'History' => 'required',
        ]);
        $aboutus = aboutus::where('id', 1)->first();
        $aboutus->about_us = $request->about_us;
        $aboutus->Vision = $request->Vision;
        $aboutus->History = $request->History;
        $aboutus->save();
        return redirect()->back()->with('success', 'Aboutus updated successfully!');

    }
}
