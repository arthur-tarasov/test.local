<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    public $timestamps = true;

    protected $fillable = [
        'title', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
