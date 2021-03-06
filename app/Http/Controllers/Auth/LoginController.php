<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request) {
        $request->validate([
            'uid' => 'required',
            'pwd' => 'required'
        ]);

        if(!Auth::attempt($request->except('csrf_token'))) {
            return redirect()->back()->withMessage('Oops, you entered an invalid information or the account does not exist');
        }

        return redirect()->route('home');
    }
}
