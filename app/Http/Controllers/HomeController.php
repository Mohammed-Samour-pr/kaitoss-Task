<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use App\Models\blog;
use App\Models\minsection;
use App\Models\services;
use App\Models\settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'aboutus' => aboutus::find(1),
            'blog' => blog::all(),
            'minsection' => Minsection::find(1),
            'services' => services::all(),
            'settings' => settings::find(1),
        ];

        return view('index', compact('data'));
    }


}
