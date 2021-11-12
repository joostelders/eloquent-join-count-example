<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function get()
    {
        $query = User::query()
            ->whereJoin('comments.text', 'LIKE', 'This is comment number 999%');

        return response()->json([
            'count_without_get' => $query->count(),
            'count_with_get' => $query->get()->count()
        ]);
    }
}
