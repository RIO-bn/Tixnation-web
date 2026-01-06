<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable = ['studio_id','movie_id','schedule_time'];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }
    public function studio(){
        return $this->belongsTo(Studio::class);
    }
}
