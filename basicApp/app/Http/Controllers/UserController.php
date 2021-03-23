<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function RetrieveName()
    {
        foreach (User::all() as $user)
        {
            echo $user->name;
        }
    }
}
