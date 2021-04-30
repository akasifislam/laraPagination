<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')
            ->paginate(5);



        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
