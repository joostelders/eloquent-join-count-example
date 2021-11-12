<?php

namespace App\Models;

use Fico7489\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use EloquentJoin;

    protected $table = 'users';

    protected $fillable = [
        'name'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

}
