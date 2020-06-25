<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table = 'job';
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
