<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {

        parent::boot();

        static::addGlobalScope('commentCount', function ($builder) {
            $builder->withCount('comments');
        });
        static::addGlobalScope('likesCount', function ($builder) {
            $builder->withCount('favorites');
        });
        static::addGlobalScope('owner', function ($builder) {
            $builder->with('owner');
        });

        static::addGlobalScope('comments', function ($builder) {
            $builder->with('comments');
        });

        static::addGlobalScope('category', function ($builder) {
            $builder->with('category');
        });

        static::addGlobalScope('qrcode', function ($builder) {
            $builder->with('qrcode');
        });
    }

    public function owner()
    {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function qrcode()
    {

        return $this->hasOne(Qrcode::class);
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function favorites()
    {

        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {

        if ( ! $this->favorites()->where('user_id', 1)->first() ){
            return $this->favorites()
                ->create([
                    'user_id'  => 1 //auth()->id()
                ]);
        }else{

            return $this->unfavorite();
        }

        // return $this->favorites()
        //         ->create([
        //             'user_id'  => 1 //auth()->id()
        //         ]);
    }
    public function unfavorite()
    {
        $this->favorites()->where('favorited_id', $this->id)->delete();
        
    }
}
