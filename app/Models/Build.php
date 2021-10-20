<?php

namespace App\Models;

use App\Models\Image;

use App\Models\Comment;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Build extends Model
{
    use HasFactory;
    protected $fillable = ['title','Descprition','auteur','commentaire'];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

   
}
