<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        return view('home');
    }

    public function getDifferentAccount(Request $request)
    {
        Auth::logout();
        Session::put("url.intended", $request->current_url);
        return redirect($_SERVER['HTTP_REFERER']);
    }

    // public function logout_session()
    // {
    //     Auth::logout();
    //     return redirect('login');
    // }

    public function clients(Request $request)
    {
        return view('clients', [
            'clients' => $request->user()->clients
        ]);
    }
}
