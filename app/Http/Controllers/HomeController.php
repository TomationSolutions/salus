<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Subscription;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin == 1)
        {
            return redirect()->route('admin.home');
        }
        elseif (auth()->user()->is_admin == 2)
        {
            return redirect()->route('admin.company');
            
        } elseif (auth()->user()->is_admin == 0) {
            return redirect()->route('admin.personal');
        }

        // return view('home');
    }

    public function admin()
    {
        $hospital = Hospital::all();
        $subscription = Subscription::all();

        return view('dashboard.dashboard1', compact('hospital', 'subscription'));
    }

    public function admincompany()
    {
        $hospital = Hospital::all();
        $subscription = Subscription::all();

        return view('dashboard.dashboard', compact('hospital', 'subscription'));

    }

}
