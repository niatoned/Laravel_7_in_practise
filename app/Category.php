<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name', 'slug', 'active'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
