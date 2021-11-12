<?php

namespace App\Models;

use Fico7489\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use EloquentJoin;

    protected $fillable = [
        'text',
        'user_id',
    ];
}
