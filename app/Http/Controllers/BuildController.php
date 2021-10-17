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
    public function create()
    {
        return view('build');
    }

    public function store(Request $request)
    {
        Build::create([
            'title'=>$request->title,
            'Descprition'=>$request->Descprition,
            'auteur'=>$request->auteur
        ]);

        dd('Build cree!');
    }
    

    public function detail($id)
    {   
        $build = Build::findOrfail($id);
        // dd($build);
        return view('detail',[
            'build' => $build
        ]);
    }

    
}
