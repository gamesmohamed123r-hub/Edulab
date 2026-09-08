<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
 function delete($id){
   $user=User::findOrFail($id);
   $user->delete();
   return redirect()->route("home")->with("message","deleted successfully");
 }
 function edit($id){
    $user = User::findOrFail($id);
    return view("user.edit",["result"=>$user]);
 }

 function update(Request $request){
    $old_id=$request->old_id;
    $user=User::findOrFail($old_id);

    $request->validate([
        'id'=>['required',Rule::unique('users','id')->ignore($old_id)],
        'name'=>['required','min:3','max:255'],
        'email'=>['required','min:3','max:255'],
        'phone'=>['required','min:3','max:22'],
        'status'=>['required',Rule::in(['0','1'])],
        'role'=>['required',Rule::in(['user','admin'])],
    ]); 

    $user->update([
        "id"=>$request->id,
        "name"=>$request->name,
        "email"=>$request->email,
        "phone"=>$request->phone,
        "status"=>$request->status,
        "role"=>$request->role,
    ]);
    return redirect()->route("home")->with("message","updated successfully");
 }

 function create(){
    return view("user.create");
 }
 
 function store(Request $request){
   $request->validate([
    'id'=>['required','unique:users','max:255'],
    'name'=>['required','min:3','max:255'],
    'email'=>['required','min:3','max:255'],
    'phone'=>['required','min:3','max:22'],
    'password'=>['required','min:8'],
   ]);
   User::create([
    "id"=>$request->id,
    "name"=>$request->name,
    "email"=>$request->email,
    "phone"=>$request->phone,
    "password"=> Hash::make($request->password),
   ]);
   return redirect()->route("home")->with("message","created successfully");
 }

}
