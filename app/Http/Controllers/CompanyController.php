<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
class CompanyController extends Controller
{
    public function list()
    {
        $companies = Company::all();
        $users = User::all();
        return view('pages.super.companies.list', [
            'companies'=> $companies,
            'users'=> $users
        ]);
    }

    public function save_ajax(Request $request)
    {
        if($request->company_id == null){
            Company::insert([
                'name'=>$request->company_name,
                'user_name'=> $request->user_name
            ]);
            $company_id = Company::max('id');
            return response()->json([
                'msg'=>'Successfully saved.',
                'company_id'=>$company_id
            ]);
        }else {
            Company::where('id', $request->company_id)->update([
                'name'=>$request->company_name,
                'user_name'=> $request->user_name
            ]);
            return response()->json([
                'msg'=>'Successfully updated.'
            ]);
        }
    }

    public function delete_company(Request $request)
    {
        Company::where('id', $request->company_id)->delete();
        return response()->json([
            'msg'=>'ok'
        ]);
    }
}