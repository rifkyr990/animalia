<?php

namespace App\Http\Controllers;
use App\Models\Animal;

use Illuminate\Http\Request;

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

    public function admin()
    {
        $animals = Animal::latest()->paginate(5);
        return view('admin', compact('animals'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function features() {
        return view('features');
    }

    public function about() {
        return view('about');
    }
}
