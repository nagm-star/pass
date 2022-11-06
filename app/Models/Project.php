<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title','body','image','user_id','slug', 
    ];

    public function getImageAttribute($image)
    {
        return asset('/uploads/projects/'.$image);

    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
