<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
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

    public function save_photo(Request $request)
    {
        if ($request->hasFile('photo')) {
            $filenameWithExtension = $request->file('photo')->getClientOriginalName();
            $filenameWithoutExtension = Auth::user()->name;
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameToStore = $filenameWithoutExtension.'.'.$extension;
            // Storing The Image
            $path = $request->file('photo')->storeAs('/upload/users', $filenameToStore);
        } else {
            $path = '/upload/users/avatar.png';
        }
        User::where('id', Auth::user()->id)->update([
            'photo_url'=> $path
        ]);
        return redirect()->route('profile');
    }

    public function delete(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect()->route('profile');
    }
}