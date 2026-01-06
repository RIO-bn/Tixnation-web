<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['user_id', 'movie_id', 'schedule_id', 'studio_id', 'total_price','seats'];
    //hubungan order dengan yang lainnya
    public function orderFoods()
    {
        return $this->hasMany(OrderFood::class);
    }

    public function user(){
        return $this->belongsTo(User::class);

    }
    public function movie() { 
        return $this->belongsTo(Movie::class); }
    public function schedule() {
        return $this->belongsTo(Schedule::class); }
    public function studio() { 
        return $this->belongsTo(Studio::class); }

 }