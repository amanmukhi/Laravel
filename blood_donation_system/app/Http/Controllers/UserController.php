<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function index($blood_group)
    {

        return redirect('/user-login')->with('blood_group', $blood_group);
    }

    public function user_login()
    {
        return view('frontend.user_login');
    }
    public function user_login_action(Request $request)
    {

        // validation
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        // dd($request->all());

        $email_check = User::where('email', $request->email)->first();
        // dd($email_check);

        if ($email_check->email == $request->email) {
            $password = Hash::check($request->password, $email_check->password);

            if ($password) {
                session(['user_id' => $email_check->id]);
                session(['user_name' => $email_check->name]);
                // dd(session('donor_id'));
                return redirect('/user-dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function dashboard()
    {
        $user_data = User::Find(session('user_id'));
        return view('frontend.user-dashboard')->with('user', $user_data);
    }

    public function user_register()
    {
        return view('frontend.user-register');
    }
    public function user_register_action(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $insert = new User;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = Hash::make($request->password);
        $insert->phone = $request->phone;

        $insert->save();

        return redirect('user-login');
    }
    public function logout()
    {
        session()->forget('user_id', 'user_name');
        return redirect('/');
    }
}
