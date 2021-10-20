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
<<<<<<< HEAD
        $request->validate([
            'title'=> ['required','max:12','min:5'],
            'Descprition'=>['required'],
            'auteur'=>['required']
        ]);

        $filename = time() . '.' . $request->avatar->extension();
        $path = $request->file('avatar')->storeAs(
            'avatars',
            $filename,
            'public'
        );
        $build = Build::create([
=======
        // $filename = time() . '.' . $request->extension();
        // $path = $request->file('avatar')->storeAs(
        //     'avatars',
        //     $filename,
        //     'public'
        // );
        Build::create([
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0
            'title'=>$request->title,
            'Descprition'=>$request->Descprition,
            'auteur'=>$request->auteur
        ]);

<<<<<<< HEAD
        $image = new Image();
        $image->avatar = $path;

        $build->image()->save($image);

        

        dd('Build crée!');
=======
        // $image = new Image();
        // $image->path = $path;

        dd('Build cree!');
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0
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
