<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;

class CategoryController extends Controller {
    
    public function index()
    {
        $recent_reivews = Review::orderBy('regarding', 'desc')->limit(10)->get();
        // die(print_r($recent_reivews));
        return view('pages.category')->with('recent_reviews', $recent_reivews);
    }
}