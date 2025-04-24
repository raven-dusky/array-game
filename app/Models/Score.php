<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'user_id',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
