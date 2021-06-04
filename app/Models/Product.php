<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static function boot(){

        parent::boot();

        // static::addGlobalScope('replyCount', function($builder){
        //     $builder->withCount('replies');
        // });
        static::addGlobalScope('owner', function($builder){
            $builder->with('owner');
        });
        static::addGlobalScope('category', function($builder){
            $builder->with('category');
        });
        static::addGlobalScope('qrcode', function($builder){
            $builder->with('qrcode');
        });

    }

    public function owner(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function qrcode(){

        return $this->hasOne(Qrcode::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);
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
