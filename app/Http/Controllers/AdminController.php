<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller 
{

    public function edit(Request $request)
    {

        $companies = Company::all();
        if($request->isMethod('post'))
        {
            // die(print_r($request->input()));
            $user = User::where('id', $request->user_id)->first();
            return view('pages.super.administrators.edit', [
                'companies' => $companies,
                'user'=> $user,
                'flag' => 'update',
            ]);
        }else {
            return view('pages.super.administrators.edit')->with('companies', $companies);
        }
    }

    public function save(Request $request)
    {
        // die(print_r($request->flag));
        $fullname = $request->name;
        $email = $request->email;
        $company_id = $request->company;
        $password = $request->password;
        if ($request->hasFile('photo')) {
            $filenameWithExtension = $request->file('photo')->getClientOriginalName();
            $filenameWithoutExtension = $request->name;
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameToStore = $filenameWithoutExtension.'.'.$extension;
            // Storing The Image
            $path = $request->file('photo')->storeAs('/upload/users', $filenameToStore);
        } else {
            // $path = '/upload/users/avatar.png';
        }

        if($request->flag == 'create') {
            User::create([
                'name' => $fullname,
                'email' => $email,
                'company_id' => $company_id,
                'photo_url' => $path,
                'password' => bcrypt($password),
            ]);
            return redirect()->route('admin_manage.edit');
        } elseif ($request->flag == 'update') {
            $user_info = User::find($request->user_id);
            if(Hash::check($request->current_password, $user_info->password)) {
                if(isset($path)) {
                    User::where('id', $request->user_id)
                        ->update([
                            'name' => $fullname,
                            'email' => $email,
                            'company_id' => $company_id,
                            'photo_url' => $path,
                            'password' => bcrypt($password),
                        ]);
                } else {
                    User::where('id', $request->user_id)
                        ->update([
                            'name' => $fullname,
                            'email' => $email,
                            'company_id' => $company_id,
                            'password' => bcrypt($password),
                        ]);
                }

                return redirect()->route('admin_manage.view');
            }else {
                $error = "Current password is incorrect.";
                $companies = Company::all();
                $user = User::where('id', $request->user_id)->first();
                return view('pages.super.administrators.edit', [
                    'companies' => $companies,
                    'user'=> $user,
                    'flag' => 'update',
                    'error'=> $error
                ]);
            }
            
            
        }
        

    }

    public function view(Request $request)
    {
        $users = DB::table('users')
                    ->join('companies', 'users.company_id', '=', 'companies.id')
                    ->select('users.*', 'companies.name as company_name')
                    ->get();
        return view('pages.super.administrators.view')->with('users', $users);
    }

    public function change_status(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'status' => $request->status
        ]);
        return response()->json([
            'message' => 'ok'
        ]);
    }

    public function delete_user(Request $request) 
    {
        User::where('id', $request->user_id)->delete();
        return response()->json([
            'message'=> 'ok'
        ]);
    }
}