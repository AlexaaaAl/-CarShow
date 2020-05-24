<?php

namespace App\Http\Controllers;
use App\Car;
use App\Category;
use App\Http\Controllers\Auth\Auth;
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
        //$user = Auth::user()->id;
        return view('home');
    }
     public function showcat()
    { $cat= Category::all();

        return view('categories',[
            'cat'=>$cat
        ]);
        
    }
    public function contact()
    {
        return view('contact');
    }
    public function welcome(){
        $cars = Car::orderby('created_at')->take(4)->get();

        return view('welcome',[
            'cars'=>$cars
        ]);
    }
}
