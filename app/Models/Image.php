<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0

class Image extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
=======
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0
}
