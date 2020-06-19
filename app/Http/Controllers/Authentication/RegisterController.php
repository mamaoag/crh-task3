<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class RegisterController extends Controller
{
    public function store(Request $request) {
        
        $request->validate(User::rules());

        $request->password = bcrypt($request->password);
        $user = User::create($request->except('csrf_token'));

        Auth::loginUsingId($user->id);

        return redirect()->route('home');
    }
}
