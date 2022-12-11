<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;
use App\Models\Donor;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{

    // view Page ========================================================

    public function dashboard()
    {
        $donor_data = Donor::all();

        $count = 0;
        foreach ($donor_data as $row) {
            $count++;
        }


        return view('admin.frontend.index')->with('donor', $count);
    }
    public function login()
    {
        return view('admin.frontend.auth_login');
    }
    public function register()
    {
        return view('admin.frontend.auth_register');
    }

    //====================================================================



    // Login Page ========================================================

    public function login_user(Request $request)
    {
        // dd($request->all());

        // validation
        $request->validate([
            'username' => 'required | email',
            'password' => 'required',
        ]);

        // check admin - email and password
        $check_email = Admin::where('email', $request->username)->first();

        if ($check_email) {

            $check_password = Hash::check($request->password, $check_email->password);

            if ($check_password) {

                session(['admin_name' => $check_email->name]);
                return redirect('/dashboard');
            } else {
                session(['error_msg' => 'Wrong Password']);
                return redirect()->back();
            }
        } else {
            session(['error_msg' => 'Invalid Email']);
            return redirect()->back();
        }
    }

    // Registration Page =================================================

    public function register_user(Request $request)
    {
        // dd($request->all());

        // validation
        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required | email',
            'admin_password' => 'required',
        ]);

        // Hashing
        $password = Hash::make($request->admin_password);

        //Insert to table - Admin Data
        $insert = new Admin;
        $insert->name =  $request->admin_name;
        $insert->email = $request->admin_email;
        $insert->password =  $password;
        $insert->save();
        return redirect('/admin/login');
    }

    //=====================================================================

    // Logout =============================================================

    public function logout()
    {
        // session(['admin_name' => $check_email->name]);
        session()->forget('admin_name');
        return redirect('/admin/login');
    }

    //=====================================================================



    // Donar Table
    public function donor_index()
    {
        $donors = Donor::all();

        return view('admin.frontend.donor')->with('donor', $donors);
    }

    // User Table
    public function user_index()
    {
        return view('admin.frontend.user');
    }
}
