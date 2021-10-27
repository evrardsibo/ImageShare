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
        $request->validate([
            'title'=> ['required','max:20','min:5'],
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
            'title'=>$request->title,
            'Descprition'=>$request->Descprition,
            'auteur'=>$request->auteur,
            'user_id' =>$request->user->id,
            'image_id'=>$request->image->id
            
        ]);

        $image = new Image();
        $image->avatar = $path;

        $build->image()->save($image);

        

        dd('Build crée!');
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
