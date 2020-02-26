<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->role == 'reader') {
            return('/reader');
        }
        elseif (Auth::check() && Auth::user()->role == 'moderator') {
            return('/moderator');
        }
        elseif (Auth::check() && Auth::user()->role == 'writer') {
            return('/writer');
        }
        else {
            return('/admin');
        }
    }
}
