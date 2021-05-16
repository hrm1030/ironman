<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile');
    }

    public function save(Request $request)
    {
        // if(Hash::check($request->password, Auth::user()->password)) {
            User::where('id', $request->id)->update([
                'name'=>$request->name,
                'email'=> $request->email,
                'language'=> $request->language,
                'country'=> $request->country,
                'password'=> bcrypt($request->password)
            ]);
            return response()->json([
                'msg'=>'success',
            ]);
        // } else {
        //     return response()->json([
        //         'msg'=> 'password incorrect.'
        //     ]);
        // }
        
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect()->route('profile');
    }
}