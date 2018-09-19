<?php
/**
 * Created by PhpStorm.
 * User: aji
 * Date: 9/19/18
 * Time: 3:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Param;

class AuthController extends Controller
{
    public function auth(Request $request){
        $request->validate([
            'email'     => 'email|required',
            'password'  => 'required'
        ]);
        $admin = Admin::where('email' , $request->email)->first();
        if(empty($admin)) return redirect()->back()->withErrors('Wrong email / password')->withInput();
        if(!Hash::check($request->password, $admin->password)) {
            return redirect()->back()->withErrors('Wrong email / password')->withInput();
        }
        $hashedString = base64_encode($request->email. ':'.$request->password);
        session(['USERDATA' =>  'Basic '.$hashedString]);
        return redirect()->route('dashboard');
    }

    public function logout() {
        session()->forget('USERDATA');
        return redirect('/');
    }

}