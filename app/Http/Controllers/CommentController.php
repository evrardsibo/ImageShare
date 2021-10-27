<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Build;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request , User $user)
    {
        //  $request->validate([

        //     'commentaire'=> ['required','max:100','min:20']
        // ]);

           
                dd($request);
         $comm = Comment::create([

            'commentaire' => $request->commentaire,
            'build_id' => $request->build_id,
            'user_id' => request()->user()->id,
            
        ]);
        dd('Commentaire crée!');

        
        


        
        
        
        $comm->save();
    }
}
