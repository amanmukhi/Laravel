<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class donorController extends Controller
{
    public function donor()
    {
        if (session('donor_id')) {
            return redirect('/donor-dashboard');
        }
        return view('frontend.donor');
    }


    public function donor_action(Request $request)
    {

        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'state' => 'required',
            'city' => 'required',
            'blood_group' => 'required',
            'unit' => 'required',

        ]);
        // dd($request->all());

        $check_email = Donor::where('email', $request->email)->first();

        if ($check_email) {
            return view('frontend.donorlogin')->with('donor', $request);
        } else {
            return view('frontend.register')->with('donor', $request);
        }
    }



    public function donor_login_action(Request $request)
    {

        // validation
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
        // dd($request->all());

        $email_check = Donor::where('email', $request->email)->first();
        // dd($email_check);

        if ($email_check->email == $request->email) {
            $password = Hash::check($request->password, $email_check->password);

            if ($password) {
                session(['donor_id' => $email_check->id]);
                session(['donor_name' => $email_check->name]);
                // dd(session('donor_id'));
                return redirect('/donor-dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }



    public function donor_registration_view()
    {
        return view('frontend.register');
    }
    public function donor_registration_action(Request $request)
    {

        // dd($request->all());

        // validation
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required | email',
        //     'password' => 'required ',
        //     'confirm_password' => 'required ',
        //     'phone' => 'required ',
        //     'visible' => 'required ',
        //     'age' => 'required ',
        //     'gender' => 'required ',
        //     'address' => 'required ',
        //     'blood_group' => 'required',
        //     'unit' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        // ]);



        $insert = new Donor;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = Hash::make($request->password);
        $insert->phone = $request->phone;
        $insert->visible = $request->visible;
        $insert->age = $request->age;
        $insert->gender = $request->gender;
        $insert->address = $request->address;
        $insert->blood_gr = $request->blood_group;
        $insert->unit = $request->unit;
        $insert->state = $request->state;
        $insert->city = $request->city;
        $insert->t_c = $request->teamcondition;
        $insert->save();

        return redirect('donor-login');
    }

    public function login_view()
    {
        return view('frontend.donor-login');
    }
    public function login_action(Request $request)
    {

        // validation
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        // dd($request->all());

        $email_check = Donor::where('email', $request->email)->first();
        // dd($email_check);

        if ($email_check->email == $request->email) {
            $password = Hash::check($request->password, $email_check->password);

            if ($password) {
                session(['donor_id' => $email_check->id]);
                session(['donor_name' => $email_check->name]);

                // dd(session('donor_id'));
                return redirect('/donor-dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }


    public function login_page()
    {
        return view('frontend.donorlogin');
    }

    public function donor_dashboard()
    {

        $donor_data = Donor::Find(session('donor_id'));
        // dd($donor_data);

        return view('frontend.donor-dashboard')->with('donor', $donor_data);
    }
    public function logout()
    {
        session()->forget('donor_id', 'donor_name');
        return redirect('/');
    }
}
