<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function product(){

        return $this->belongsTo(Product::class);
    }
    public function favorites(){ 

        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite(){

        if(! $this->where('user_id', auth()->id())->first())
            $this->favorites()
                    ->create([
                        'user_id'  => auth()->id()
                    ]);
    }
}
