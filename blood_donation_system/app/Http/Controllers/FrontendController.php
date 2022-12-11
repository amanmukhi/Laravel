<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // All View Pages
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about-us');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function events()
    {
        return view('frontend.events');
    }
    public function event_single()
    {
        return view('frontend.event_single');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function gallery_1()
    {
        return view('frontend.gallery_1');
    }
    public function gallery_2()
    {
        return view('frontend.gallery_2');
    }
    public function error()
    {
        return view('frontend.404');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function single_blog()
    {
        return view('frontend.single');
    }
    public function search_view()
    {
        return view('frontend.search_view');
    }

    // Search 
    public function search(Request $request)
    {
        // dd($request->all());
        $result = Donor::where('blood_gr', $request->group)->get();
        session()->put('blood_group', $result[0]->blood_gr);

        // dd($result);
        return view('frontend.search_view', compact('result'));
    }

    //----------------end-----------------
}
