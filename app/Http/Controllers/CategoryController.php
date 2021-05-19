<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use App\Category;

class CategoryController extends Controller {
    
    public function index()
    {
        $categories = array();
        $pcategories = Category::where('pid', 1)->orderBy('order_num', 'asc')->get();
        foreach( $pcategories as $pcategory ) {
            $new_pcat = Category::get_children($pcategory);
            array_push($categories, $new_pcat);
        }

        return view('pages.category.category_list')->with('categories', $categories);
    }

}