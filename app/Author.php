<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email_address', 'biodata', 'profile_picture'
    ];

    public function books()
    {
        return $this->hasMany('App\Book', 'id');
    }
}
