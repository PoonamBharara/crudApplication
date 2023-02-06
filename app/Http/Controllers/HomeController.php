<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{
    public function index(){
        $Data = DB::table('company')->get();
        return view('companies.index', ['Data' => $Data]);
    }
    public function add(){
        return view('companies.create');
    }

    public function store(Request $request)
    { 
        
        $validateData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:company',
            'address' => 'required|max:200'
        ]);
       $company =  new Company; 
       $company->name = $request['name'];
       $company->email = $request['email'];
       $company->address = $request['address'];
       $company->created_at = $request['created_at'];
       $company->updated_at = $request['updated_at'];
       $company->save();
      $Data = DB::table('company')->get();
      return view('companies.index', ['Data' => $Data]);
  
    }

    public function edit($id){
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }
    public function update(Request $request, $id){
            
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        $Data = DB::table('company')->get();
        return view('companies.index', compact('Data'));
    }

    public function delete($id){
        $company = Company::find($id)->delete();
        $Data = DB::table('company')->get();
        return view('companies.index', compact('Data'));
    }
}
