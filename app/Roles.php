<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\User');
    }
}
