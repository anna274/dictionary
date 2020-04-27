<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['expression', 'meaning', 'example'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_word');
    }
}
