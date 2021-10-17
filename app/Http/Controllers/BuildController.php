<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Image;
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
        // $filename = time() . '.' . $request->extension();
        // $path = $request->file('avatar')->storeAs(
        //     'avatars',
        //     $filename,
        //     'public'
        // );
        Build::create([
            'title'=>$request->title,
            'Descprition'=>$request->Descprition,
            'auteur'=>$request->auteur
        ]);

        // $image = new Image();
        // $image->path = $path;

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
