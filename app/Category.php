<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model {

    public static function get_children ($pcategory) {
        $children = Category::where('pid', $pcategory->id)->orderBy('order_num', 'asc')->get();
        // die(print_r($children[0]->name));
        $new_pcat = array(
            "id"=>$pcategory->id,
            "name"=> $pcategory->name,
            "order_num"=> $pcategory->order_num,
            "pid"=> $pcategory->pid,
            "children"=> $children
        );
        return $new_pcat;
    }
}