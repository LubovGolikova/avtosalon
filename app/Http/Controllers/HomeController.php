<?php

namespace App\Http\Controllers;
use App\Review;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reviews = Review::where('display', 1)->where('parent_id', '=', null)->orderBy('created_at', 'DESC')->paginate(10);
        return view('home',compact('reviews' ));
    }
}
