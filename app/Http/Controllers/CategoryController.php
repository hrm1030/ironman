<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use App\Category;

class CategoryController extends Controller {
    
    public function index()
    {
        // $recent_reivews = Review::orderBy('regarding', 'desc')->limit(10)->get();
        // // die(print_r($recent_reivews));
        // return view('pages.category')->with('recent_reviews', $recent_reivews);
        $categories = array();
        $pcategories = Category::where('pid', 1)->orderBy('order_num', 'asc')->get();
        foreach( $pcategories as $pcategory ) {
            $new_pcat = Category::get_children($pcategory);
            array_push($categories, $new_pcat);
        }

        return view('pages.category.category_list')->with('categories', $categories);
    }

    public function detail(Request $request)
    {

    }
}