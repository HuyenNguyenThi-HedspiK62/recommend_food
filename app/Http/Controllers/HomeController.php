<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
        $user =Auth::user();
        return view('home', compact('user'));
    }

    public function showuserfood(){
        $user = User::all();
        dd($user);
        return view('todos.user_food', compact('users'));
    }

    public function showallpost($id){
        $user = User::where('id', $id)->first();
        return view('todos.allpost', compact('user'));
    }
}
