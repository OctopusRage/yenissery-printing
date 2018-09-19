<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userData = session('USERDATA');
        $auth = null;
        if($request->header('Authorization') && empty($userData)) {
            $auth = $request->header('Authorization');
        } else {
            $auth = $userData;
        }
        if(empty($auth)) return response('Unauthorized', 401);

        $token = str_replace('Basic ', '', $auth);
        $token = base64_decode($token);
        $tokenArr = explode(':',  $token);
        $email = $tokenArr[0];
        $passwordHash = $tokenArr[1];
        $admin = Admin::where([
            'email' => $email,
        ])->first();

        if(empty($admin)) return response('Unauthorized', 401);

        if(!Hash::check($passwordHash, $admin->password)) return response('Unauthorized', 401);

        $request->admin = $admin;
        return $next($request);
    }
}
