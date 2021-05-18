<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('regarding', 'desc')->get();
        return view('pages.index')->with('reviews', $reviews);
    }
}
