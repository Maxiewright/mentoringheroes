<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if (\auth()->user()->is_admin)

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended('/admin');
    }

}
