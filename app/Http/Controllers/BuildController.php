<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index()
    {
        $builds = Build::all();
        //dd($builds);
        return view('home',[

            'builds' => $builds
        ]);
    }

    public function build()
    {
        return view('build');
    }

    public function detail()
    {
        return view('detail');
    }

    public function detail1()
    {
        return view('detail1');
    }
}
