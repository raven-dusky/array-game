<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    protected $fillable = [
        'user_id',
        'loop_enhancer',
        'stack_overdrive',
        'bit_splitter',
        'garbage_collector',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
