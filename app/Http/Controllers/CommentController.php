<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        

         $comm = Comment::create([

            'commentaire' => $request->commentaire,
            'image_id' => $request->image_id
            
        ]);

        $comm = Comment::all();
        return view('detail',[
            'comm'=> $comm
        ]);
        
        dd('Commentaire crée!');

        
        


        
        
        
        $comm->save();
    }
}
