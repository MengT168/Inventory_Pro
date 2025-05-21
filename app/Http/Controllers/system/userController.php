<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class userController extends Controller {

    public function signUp(){
        return view('admin.sign_up');
    }

    public function signIn(){
        return view('admin.login');
    }


      public function signUpSubmit(Request $request)
{
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => [
            'required',
            Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
        ],
    ], [
        'username.required' => 'Please enter a username.',
        'email.required' => 'Email is required.',
        'email.email' => 'Enter a valid email address.',
        'email.unique' => 'Email is already registered.',
        'password.required' => 'Password is required.',
        'password.min' => 'Password must be at least 8 characters.',
        'password.mixedCase' => 'Password must have both uppercase and lowercase letters.',
        'password.letters' => 'Password must include at least one letter.',
        'password.numbers' => 'Password must include at least one number.',
        'password.symbols' => 'Password must include at least one symbol (e.g., @, #, !).',
        'password.uncompromised' => 'This password has appeared in a data leak. Please choose a different one.',
    ]);

    if ($validator->fails()) {
        return redirect('/signup')
                ->withErrors($validator)
                ->withInput();
    }

    $username = $request->input('username');
    $email = $request->input('email');
    $password = Hash::make($request->input('password'));

    $adminExists = DB::table('users')->where('is_admin', 1)->exists();
    $is_admin = $adminExists ? 0 : 1;

    $permissions = $is_admin ? json_encode(['all']) : json_encode(['']);

    DB::table('users')->insert([
        'name'        => $username,
        'email'       => $email,
        'is_admin'    => $is_admin,
        'permission' => $permissions, 
        'password'    => $password,
        'created_at'  => now(),
        'updated_at'  => now(),
    ]);

    return redirect('/')->with('Message', 'Registration successful!');
}

public function signInSubmit(Request $request) {
       if (Auth::attempt(['name' => $request->input('username'), 'password' => $request->input('password')])) {

        $user = Auth::user();

         

        if ($user->is_admin == 1) {
            $this->sendTelegramAlert("✅ User Login: {$user->name} ({$user->email})");
            return redirect('/admin/dashboard');
        }
        elseif($user->is_admin == 2){
            $this->sendTelegramAlert("✅ User Login: {$user->name} ({$user->email}) ");
            return redirect('/admin/dashboard');
        }
        elseif($user->is_admin == 0){
            $this->sendTelegramAlert("🫷 User Login: {$user->name} ({$user->email}) request to approve");
            return redirect('/')->with('Message', 'Your account has not been approved by an admin.');
        }
       else {
            $this->sendTelegramAlert("⛔ User Login: {$user->name} ({$user->email}) UnAuthorize");
            Auth::logout();
            return redirect('/')->with('Message', 'Please signup or signin.');
        }

    } else {
        $this->sendTelegramAlert("⛔ User Login: {$request->input('username')} UnAuthorize");
        Auth::logout();
        return redirect('/')->with('Message', 'Wrong Username or Password');
    }
    }

     public function logout()
    {
        Auth::logout();
       
        return redirect('/');
    }

  
}