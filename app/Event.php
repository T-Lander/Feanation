<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date', 'hightlight',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
