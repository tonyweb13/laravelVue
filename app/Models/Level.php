<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users()
    {
        $this->belongsToMany(User::class);
    }
}
