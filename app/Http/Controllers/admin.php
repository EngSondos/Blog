<?php

namespace App\Http\Controllers;

use App\Models\Admin as ModelsAdmin;
use CreateAdminsTable;
use Illuminate\Http\Request;

class admin extends Controller

{ 
    public function show(){
     $admin = ModelsAdmin::all();
    return view ('admin.show',compact('admin'));

  }

// public function store(Request $request){
//   ModelsAdmin::create([
//       'name'=>$request->name,
//       'email'=>$request->email,
//       'password'=>$request->password,
//   ]);
// }
  public function edit($id){
    // echo $id;die;
     $admin = ModelsAdmin::find($id);
    //  dd($admin);
      return view('admin.edit',compact('admin'));
  }
  
   public function update(Request $request){
    $admin = ModelsAdmin::where("id", $request->id)->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>$request->password,
    ]);

      return redirect(url('/admin/show'));

       }
  
       public function delete($id){
          ModelsAdmin::find($id)->delete();
          return redirect(url('/admin/show'));
       }
       }