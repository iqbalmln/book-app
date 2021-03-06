<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(Type $var = null)
    {
        return $this->belongsTo('App\User', 'role_id');
    }
}
