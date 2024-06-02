<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller

{
    public function welcome(){
        return view('welcome');
    }
    
    public function show(){
        $users = Company::all();
        return view('layout.show', compact('users'));
    }
    public function create(){
        return view('layout.create');
    }
    public function add(Request $request){
       
       $users = Company::all(); 

       $request->validate([
         "name"=> 'required|max:255|string',
         "salary"=> 'required|max:255|string',
       ]);

       Company::create([
           'name' => $request->name,
           'salary' => $request->salary
       ]);

       return redirect('create')->with('status','Added succesfully');

    }

    public function edit(int $id){
        $users = Company::findOrFail($id);
        return view('layout.edit',compact('users'));
    }
    public function update(Request $request, int $id){
        
        $request->validate([
          "name"=> 'required|max:255|string',
          "salary"=> 'required|max:255|string',
        ]);
 
        Company::findOrFail($id)->update([
            'name' => $request->name,
            'salary' => $request->salary
        ]);
 
        return redirect()->back()->with('status','Updated succesfully');

    }
    public function delete(int $id){
        $users= Company::findOrFail($id);
        $users->delete();
        return redirect('show')->with('status','Deleted succesfully');
    }
   

    


}
