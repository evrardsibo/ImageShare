<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['commentaire','build_id','user_id'];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
