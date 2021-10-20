<?php

namespace App\Models;

use App\Models\Image;
<<<<<<< HEAD

use App\Models\Comment;
use App\Models\Voiture;
=======
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Build extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['title','Descprition','auteur','commentaire'];
=======
    protected $fillable = ['title','Descprition','auteur'];
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0

    public function image()
    {
        return $this->hasOne(Image::class);
    }
<<<<<<< HEAD

   
=======
>>>>>>> 9a100756cc26639f1318777b5e50ff5da6f93cb0
}
